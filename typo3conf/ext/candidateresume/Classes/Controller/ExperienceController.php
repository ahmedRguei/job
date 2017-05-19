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

/**
 * ExperienceController
 */
class ExperienceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * experienceRepository
     * 
     * @var \Softtodo\Candidateresume\Domain\Repository\ExperienceRepository
     * @inject
     */
    protected $experienceRepository = null;

    /**
     * CandidateRepository
     *
     * @var \Softtodo\Candidateresume\Domain\Repository\CandidateRepository
     * @inject
     */
    protected $candidateRepository = null;

    /**
     * @var \TYPO3\CMS\Core\Resource\ResourceFactory
     * @inject
     */
    protected $resourceFactory;

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     * @inject
     */
    protected $objectManager;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */
    protected $persistenceManager;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $experiences = $this->experienceRepository->findAll();
        $this->view->assign('experiences', $experiences);
    }

    /**
     * action show
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function showAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->view->assign('experience', $experience);
    }

    /**
     * action new
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function newAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->view->assign('candidate', $candidate);
    }

    /**
     * action create
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $newExperience
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Experience $newExperience,
                                 \Softtodo\Candidateresume\Domain\Model\Candidate $candidate )
    {
       // var_dump($this->request->getArgument('file'));exit;
        $filedata = $this->request->getArgument('file');
        $file = $this->uploadFile($filedata, 'aaa', $newExperience);
        $candidate->addExperience($newExperience);
        $this->candidateRepository->update($candidate);
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->experienceRepository->add($newExperience);
        $this->redirect('new', 'Experience', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * action edit
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @ignorevalidation $experience
     * @return void
     */
    public function editAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->view->assign('experience', $experience);
    }

    /**
     * action update
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->experienceRepository->update($experience);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->experienceRepository->remove($experience);
        $this->redirect('list');
    }

    protected function createFileReferenceFromFalFileObject(\TYPO3\CMS\Core\Resource\File $file, $resourcePointer = null, $obj)
    {
        $fileObject = $this->resourceFactory->getFileObject($file->getUid());
         DebuggerUtility::var_dump($fileObject->getUid());
         exit;

        $newId = uniqid('NEW_');
        $data = [];
        $data['sys_file_reference'][$newId] = [
            'table_local' => 'sys_file',
            'uid_local' => $fileObject->getUid(),
            'tablenames' => 'your_table_name',
            'uid_foreign' => $obj->getUid(),
            'fieldname' => 'your_field_name',
            'pid' => $obj->getPid(),
        ];
        $data['your_table_name'][$obj->getUid()] = [
            'image' => $newId,
        ];
        // Get an instance of the DataHandler and process the data
        /** @var DataHandler $dataHandler */
        $dataHandler = GeneralUtility::makeInstance(
            'TYPO3\CMS\Core\DataHandling\DataHandler'
        );
        $dataHandler->start($data, []);
        $dataHandler->process_datamap();

        if (count($dataHandler->errorLog) !== 0) {
            echo 'error !!!';
            exit;
        }
    }


    /**
     *
     * @var array $fileData
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    private function uploadFile($fileData, $targetNameOfFile, $obj) {
        $storageRepository =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\StorageRepository');
        $storage = $storageRepository->findByUid(1); # Fileadmin = 1
        // $saveFolder = $storage->getFolder($this->settings['uploadFolder']);
        $saveFolder = $storage->getFolder('content');
        $fileObject = $storage->addFile($fileData, $saveFolder, $targetNameOfFile);
        $repositoryFileObject = $storage->getFile($fileObject->getIdentifier());
        $this->createFileReferenceFromFalFileObject($repositoryFileObject, null, $obj);
        return $repositoryFileObject;
    }
}
