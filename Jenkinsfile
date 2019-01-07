#!/usr/bin/env groovy

pipeline {
    agent any
    stages{
        stage('Build'){
            steps {
                sh 'composer install'
            }
        }
        stage('Test'){
            steps {
                sh 'composer run ci:test'
            }
            post {
                always {
                    publishHTML([allowMissing: false, alwaysLinkToLastBuild: false, keepAll: false, reportDir: 'tests/_output', reportFiles: 'report.html,coverage/index.html', reportName: 'Codeception report', reportTitles: 'Test overview,Code coverage'])
                    xunit testTimeMargin: '3000', thresholdMode: 1, thresholds: [failed(failureThreshold: '100', unstableThreshold: '0')], tools: [JUnit(deleteOutputFiles: false, failIfNotNew: false, pattern: 'tests/_output/report.xml', skipNoTestFiles: true, stopProcessingIfError: true)]
                    step([
                        $class: 'CloverPublisher',
                        cloverReportDir: 'tests/_output/coverage',
                        cloverReportFileName: '../coverage.xml',
                        healthyTarget: [methodCoverage: 70, conditionalCoverage: 80, statementCoverage: 80],
                        unhealthyTarget: [methodCoverage: 50, conditionalCoverage: 50, statementCoverage: 50],
                        failingTarget: [methodCoverage: 0, conditionalCoverage: 0, statementCoverage: 0]]
                    )
                    checkstyle canComputeNew: false, defaultEncoding: '', healthy: '0', pattern: 'reports/*-checkstyle.xml', unHealthy: '20', unstableTotalHigh: '0', unstableTotalNormal: '5'
                    pmd canComputeNew: false, defaultEncoding: '', healthy: '', pattern: 'reports/phpmd.xml', unHealthy: ''
                    dry canComputeNew: false, canRunOnFailed: true, defaultEncoding: '', healthy: '', pattern: 'reports/phpcpd.xml', unHealthy: '', unstableTotalHigh: '0'
                }
            }
        }
    }
}