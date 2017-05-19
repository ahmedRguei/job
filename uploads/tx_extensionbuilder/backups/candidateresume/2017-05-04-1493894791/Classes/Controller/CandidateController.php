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
        $this->view->assign('candidate', $candidate);
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
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->candidateRepository->add($newCandidate);
        $this->redirect('list');
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
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->candidateRepository->update($candidate);
        $this->redirect('list');
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
}
