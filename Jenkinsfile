pipeline {
  def app
  environment {
    registry = "arikperl/wordpress"
    registryCredential = 'dockerhub'
  }
  agent { label 'JEN-SLAVE1' }
  stages {
  
    stage('Clone repository') {
        /* Let's make sure we have the repository cloned to our workspace */
	  steps {
        checkout scm
	  }
    }
	
    stage('Cloning Git') {
      steps {
        git 'https://github.com/arikperl/wp-docker.git'
      }
    }
	
    stage('Building image') {
      steps{
        script {
          app = docker.build registry + ":$BUILD_NUMBER"
        }
      }
    }
	
	stage('pushing image') {
      steps{
	    withDockerRegistry([credentialsId: registryCredential, url: "https://index.docker.io/v1/"]){
		  script {
          app.push()
        }
          
      }
    }
	
    }
  }
}