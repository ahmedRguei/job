baseURL = http://job.local/
plugin.tx_candidateresume_candidateresume {
  view {
    # cat=plugin.tx_candidateresume_candidateresume/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:candidateresume/Resources/Private/Templates/
    # cat=plugin.tx_candidateresume_candidateresume/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:candidateresume/Resources/Private/Partials/
    # cat=plugin.tx_candidateresume_candidateresume/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:candidateresume/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_candidateresume_candidateresume//a; type=string; label=Default storage PID
    storagePid =
  }
}
