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
 * SkillController
 */
class SkillController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * skillRepository
     * 
     * @var \Softtodo\Candidateresume\Domain\Repository\SkillRepository
     * @inject
     */
    protected $skillRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $skills = $this->skillRepository->findAll();
        $this->view->assign('skills', $skills);
    }

    /**
     * action show
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skill
     * @return void
     */
    public function showAction(\Softtodo\Candidateresume\Domain\Model\Skill $skill)
    {
        $this->view->assign('skill', $skill);
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
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $newSkill
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Skill $newSkill)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->skillRepository->add($newSkill);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skill
     * @ignorevalidation $skill
     * @return void
     */
    public function editAction(\Softtodo\Candidateresume\Domain\Model\Skill $skill)
    {
        $this->view->assign('skill', $skill);
    }

    /**
     * action update
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skill
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Skill $skill)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->skillRepository->update($skill);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skill
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Skill $skill)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->skillRepository->remove($skill);
        $this->redirect('list');
    }
}
