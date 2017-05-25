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
     * CandidateRepository
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
     * action new
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function newAction(\Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->view->assign('candidate', $candidate);
        $this->view->assign('educations', $candidate->getEducations());
    }

    /**
     * action create
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $newEducation
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Education $newEducation,
                                 \Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $candidate->addEducation($newEducation);
        $this->candidateRepository->update($candidate);
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->educationRepository->add($newEducation);
        $this->redirect('new', 'Education', 'Candidateresume', array('candidate' => $candidate) );
    }
    /**
     * action createAjax
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Education $newEducation
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function createAjaxAction(\Softtodo\Candidateresume\Domain\Model\Education $newEducation = NULL,
                                 \Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        // if education is empty, do not make it persistent
        if ($newEducation->getSchool()=="") return FALSE;
        $candidate->addEducation($newEducation);
        $this->candidateRepository->update($candidate);
        //$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->educationRepository->add($newEducation);
        $educations = $candidate->getEducations();
        foreach ($educations as $education){
            $json[$education->getUid()] = array(
                'school'=>$education->getSchool(),
                'degree' => $education->getDegree(),
                'fieldstudy' => $education->getFieldStudy(),
                'fromdate' => $education->getFromDate(),
                'todate' => $education->getToDate(),
                'uid' => $education->getUid()
            );
        }
        return json_encode($json);
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
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $candidate
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Education $education,
                                 \Softtodo\Candidateresume\Domain\Model\Experience $candidate)
    {
        $this->educationRepository->update($education);
        $this->persistenceManager->persistAll();
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $candidate
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Education $education,
                                 \Softtodo\Candidateresume\Domain\Model\Experience $candidate)
    {
        $this->educationRepository->remove($education);
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }
}
