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
 * EducationController
 */
class EducationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * educationRepository
     * 
     * @var \Softtodo\Candidateresume\Domain\Repository\EducationRepository
     * @inject
     */
    protected $educationRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $educations = $this->educationRepository->findAll();
        $this->view->assign('educations', $educations);
    }

    /**
     * action show
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @return void
     */
    public function showAction(\Softtodo\Candidateresume\Domain\Model\Education $education)
    {
        $this->view->assign('education', $education);
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
     * @param \Softtodo\Candidateresume\Domain\Model\Education $newEducation
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Education $newEducation)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->educationRepository->add($newEducation);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @ignorevalidation $education
     * @return void
     */
    public function editAction(\Softtodo\Candidateresume\Domain\Model\Education $education)
    {
        $this->view->assign('education', $education);
    }

    /**
     * action update
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Education $education)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->educationRepository->update($education);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Education $education)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->educationRepository->remove($education);
        $this->redirect('list');
    }
}
