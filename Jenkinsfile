pipeline {
  environment {
    registry = "registry.gitlab.com/shookit/wp-baseline"
    registryCredential = 'GiltLab-Shookit'
  }
  agent { label 'jen-slave1' }
  stages {
  
    stage('Clone repository') {
        /* Let's make sure we have the repository cloned to our workspace */
	  steps {
        checkout scm
	  }
    }
	
    stage('Cloning WP Shookit baseline repo') {
      steps {
        checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'RelativeTargetDirectory', relativeTargetDir: 'wp-baseline-test']], submoduleCfg: [], userRemoteConfigs: [[credentialsId: 'GiltLab-Shookit', url: 'https://gitlab.com/shookit/wp-baseline.git']]])
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
	    withDockerRegistry([credentialsId: registryCredential, url: "https://registry.gitlab.com"]){
		  script {
          app.push()
	  app.push("latest")
        }
          
      }
    }
	
    }
  }
}

