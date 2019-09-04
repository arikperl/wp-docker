pipeline {
  environment {
    registry = "arikperl/wordpress"
    registryCredential = 'dockerhub'
  }
  agent { label 'JEN-SLAVE1' }
  stages {
  
    stage('Clone repository') {
        /* Let's make sure we have the repository cloned to our workspace */

        checkout scm
    }
	
    stage('Cloning Git') {
      steps {
        git 'https://github.com/arikperl/wp-docker.git'
      }
    }
	
    stage('Building image') {
      steps{
        script {
          docker.build registry + ":$BUILD_NUMBER"
        }
      }
    }
  }
}