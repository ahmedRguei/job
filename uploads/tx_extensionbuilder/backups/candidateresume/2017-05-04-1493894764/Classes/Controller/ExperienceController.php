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
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $newExperience
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Experience $newExperience)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->experienceRepository->add($newExperience);
        $this->redirect('list');
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
}
