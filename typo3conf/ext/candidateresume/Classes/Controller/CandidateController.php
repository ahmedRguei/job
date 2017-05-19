<?php
namespace Softtodo\Candidateresume\Controller;

/***
 *
 * This file is part of the "Candidate Resume Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Ahmed Rguei <ahmed.rguei@softtodo.com>, Softotdo
 *
 ***/
use Softtodo\Candidateresume\Controller\UploadFileController;
/**
 * CandidateController
 */
class CandidateController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * candidateRepository
     * 
     * @var \Softtodo\Candidateresume\Domain\Repository\CandidateRepository
     * @inject
     */
    protected $candidateRepository = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */
    protected $persistenceManager;
    /**
     * @var \TYPO3\CMS\Core\Resource\ResourceFactory
     * @inject
     */
    protected $resourceFactory;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $candidates = $this->candidateRepository->findAll();
        $this->view->assign('candidates', $candidates);
    }

    /**
     * action show
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function showAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        //candidate's information
        $this->view->assign('candidate', $candidate);

        $numberOfLanguages = count(explode(',', $candidate->getSpokenLanguage()));
        $this->view->assign('numberOfLanguages', $numberOfLanguages);
        $this->view->assign('skills', $candidate->getSkills());
        $this->view->assign('experiences', $candidate->getExperiences());
        $this->view->assign('languages', $candidate->getLanguages());
        $this->view->assign('educations', $candidate->getEducations());
        //similar candidates
        $similarCandidates = $this->candidateRepository->findSimilarCandidates();
        $this->view->assign('similarCandidates', $similarCandidates);
        //resume file; gotten from the table sys_file
        if($candidate->getResmue() > 0){
            $fileObject = $this->resourceFactory->retrieveFileOrFolderObject( 'file:'.$candidate->getResmue() );
            $this->view->assign('resumefile', $fileObject);
        }
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {
        if($this->request->hasArgument('search')){
            $search = $this->request->getArgument('search');
        }
        $candidates = $this->candidateRepository->findByName($search['name'], $search['skills'], $search['location']);
        $this->view->assign('candidates', $candidates);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $newCandidate
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Candidate $newCandidate)
    {
        //begin : define the longitude and latitude automaticly
        $this->setLongitudeLatitude($newCandidate);
        //end : define the longitude and latitude automaticly

        //$data = array();
        //$fileName = $this->candidateRepository->registerUploadField($data, key($_FILES), 'tx_candidateresume_candidateresume[newCandidate][image]');

        $this->candidateRepository->add($newCandidate);
        $this->addFlashMessage('Candidate added');
        $this->persistenceManager->persistAll();
        $this->redirect('new', 'Education', 'Candidateresume', array('candidate' => $newCandidate) );
    }

    /**
     * action setLongitudeLatitude
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $Candidate
     * @return void
     */
    public function setLongitudeLatitude(\Softtodo\Candidateresume\Domain\Model\Candidate $Candidate)
    {
        // We get the JSON results from this request
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode( $Candidate->getAddress() ).'&sensor=false');
        // We convert the JSON to an array
        $geo = json_decode($geo, true);
        // If everything is cool
        if ($geo['status'] = 'OK') {
            // We set our values
            $latitude = $geo['results'][0]['geometry']['location']['lat'];
            $longitude = $geo['results'][0]['geometry']['location']['lng'];
        }
        $Candidate->setLongitude($latitude);
        $Candidate->setLatittude($longitude);
    }


    /**
     * action edit
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @ignorevalidation $candidate
     * @return void
     */
    public function editAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->view->assign('candidate', $candidate);
    }

    /**
     * action update
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        //begin : update the longitude and latitude automaticly
        $this->setLongitudeLatitude($candidate);
        //end : update the longitude and latitude automaticly
        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->candidateRepository->update($candidate);
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * action updateAcquiredSkills
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function updateAcquiredSkillsAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->candidateRepository->update($candidate);
        $json[$candidate->getUid()] = array(
            'acquiredSkills' => $candidate->getAcquiredSkills()
        );
        return json_encode($json);
    }

    /**
     * action updateSpokenLanguges
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function updateSpokenLangugesAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->candidateRepository->update($candidate);
        $json[$candidate->getUid()] = array(
            'spokenLanguage' => $candidate->getSpokenLanguage()
        );
        return json_encode($json);
    }


    /**
     * action updateAjax
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function updateAjaxAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        //begin : update the longitude and latitude automaticly
        $this->setLongitudeLatitude($candidate);
        //end : update the longitude and latitude automaticly
        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->candidateRepository->update($candidate);
        $json[$candidate->getUid()] = array(
            'availabilityElement' => $candidate->getAvailability(),
            'interviewNotesElement' => $candidate->getInterviewNotes(),
            'plannedInterviewDateElement' => $candidate->getPlannedInterviewDate(),
            'realInterviewDateElement' => $candidate->getRealInterviewDate()
        );
        return json_encode($json);
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->candidateRepository->remove($candidate);
        $this->redirect('list');
    }

    /**
     * Upload files.
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function uploadAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate) {
        $data = array();
        $namespace = key($_FILES);
        // Register every upload field from the form:
        $uidfile = $this->registerUploadField($data, $namespace, 'resmue');
        $candidate->setResmue($uidfile);
        $this->candidateRepository->update($candidate);
        $this->persistenceManager->persistAll();
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * Registers an uploaded file for TYPO3 native upload handling.
     *
     * @param array &$data
     * @param string $namespace
     * @param string $fieldName
     * @param string $targetDirectory
     * @return integer
     */
    protected function registerUploadField(array &$data, $namespace, $fieldName, $targetDirectory = '1:/content/') {
        if (!isset($data['upload'])) {
            $data['upload'] = array();
        }
        $counter = count($data['upload']) + 1;

        $keys = array_keys($_FILES[$namespace]);
        foreach ($keys as $key) {
            $_FILES['upload_' . $counter][$key] = $_FILES[$namespace][$key][$fieldName];
        }
        $data['upload'][$counter] = array(
            'data' => $counter,
            'target' => $targetDirectory,
        );
        // Initializing:
        $overwriteExistingFiles = TRUE;
        /** @var \TYPO3\CMS\Core\Utility\File\ExtendedFileUtility $fileProcessor */
        $fileProcessor = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Utility\\File\\ExtendedFileUtility');
        $fileProcessor->init(array(), $GLOBALS['TYPO3_CONF_VARS']['BE']['fileExtensions']);
        $fileProcessor->setActionPermissions(array('addFile' => TRUE));
        $fileProcessor->dontCheckForUnique = $overwriteExistingFiles ? 1 : 0;

        // Actual upload
        $fileProcessor->start($data);
        $result = $fileProcessor->processData();

        // Do whatever you want with $result (array of File objects)
        foreach ($result['upload'] as $files) {
            /** @var \TYPO3\CMS\Core\Resource\File $file */
            $file = $files[0];	// Single element array due to the way we registered upload fields
            return $file->getUid();
        }
    }
}
