provider "aws" {
}

provider "tfe" {
  token = "guz8wzA4aeAgkc.atlasv1.3E6e7mwJYC6LZklYvPMc9tzUL5kaq3zQ97UnNZhce4zbza1vg0vrKFkyQEGdNSfIRCs"
}

terraform {
  backend "remote" {
    organization = "corebox"
    hostname     = "app.terraform.io"
    token        = "guz8wzA4aeAgkc.atlasv1.3E6e7mwJYC6LZklYvPMc9tzUL5kaq3zQ97UnNZhce4zbza1vg0vrKFkyQEGdNSfIRCs"

    workspaces {
      prefix = "dev-awsproject-aws-infra-"
    }
  }
}