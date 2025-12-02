pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/Desri-Nur-Fadilah/tugas-ci-php.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                powershell 'composer install'
            }
        }
        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }
        stage('Run PHPUnit') {
            steps {
                powershell 'vendor\\bin\\phpunit tests'
            }
        }
    }
    post {
        always {
            echo "Build selesai"
        }
        success {
            echo "Build sukses ✅"
        }
        failure {
            echo "Build gagal ❌"
        }
    }
}
