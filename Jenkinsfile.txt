pipeline {
  agent any

  stages {
    stage('Checkout') {
      steps {
        checkout scm
      }
    }

    stage('Run PHP') {
      steps {
        powershell 'php index.php'
      }
    }

    stage('Install Dependencies') {
      steps {
        powershell 'composer install'
      }
    }

    stage('Run PHPUnit') {
      steps {
        powershell './vendor/bin/phpunit --testdox'
      }
    }
  }
}
