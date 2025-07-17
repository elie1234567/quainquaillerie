pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/elie1234567/quainquaillerie.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
