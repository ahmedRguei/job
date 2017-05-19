
plugin.tx_candidateresume_candidateresume {
  view {
    templateRootPaths.0 = EXT:candidateresume/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_candidateresume_candidateresume.view.templateRootPath}
    partialRootPaths.0 = EXT:candidateresume/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_candidateresume_candidateresume.view.partialRootPath}
    layoutRootPaths.0 = EXT:candidateresume/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_candidateresume_candidateresume.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_candidateresume_candidateresume.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_candidateresume._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-candidateresume table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-candidateresume table th {
        font-weight:bold;
    }

    .tx-candidateresume table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
