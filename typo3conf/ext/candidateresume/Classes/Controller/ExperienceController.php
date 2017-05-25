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
        $candidate->addExperience($newExperience);
        $this->candidateRepository->update($candidate);
        $this->experienceRepository->add($newExperience);
        $this->redirect('new', 'Experience', 'Candidateresume', array('candidate' => $candidate) );
    }
    /**
     * action createAjax
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $newExperience
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function createAjaxAction(\Softtodo\Candidateresume\Domain\Model\Experience $newExperience,
                                    \Softtodo\Candidateresume\Domain\Model\Candidate $candidate )
    {
        // if experience is empty, do not make it persistent
        if ($newExperience->getAddress()=="") return FALSE;
        $candidate->addExperience($newExperience);
        $this->candidateRepository->update($candidate);
        $this->experienceRepository->add($newExperience);
        $json[$newExperience->getUid()] = array(
            'title'=>$newExperience->getTitle(),
            'company'=>$newExperience->getCompany(),
            'startdate'=>$newExperience->getStartDate(),
            'enddate'=>$newExperience->getEndDate(),
            'description'=>$newExperience->getDescription(),
            'address'=>$newExperience->getAddress(),
            'uid' => $newExperience->getUid()
        );
        return json_encode($json);
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
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $candidate
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience,
                                 \Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $this->experienceRepository->update($experience);
        $this->persistenceManager->persistAll();
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }
    /**
     * action updateCandidat
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function updateCandidatAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->experienceRepository->update($experience);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $candidate
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience,
                                 \Softtodo\Candidateresume\Domain\Model\Experience $candidate)
    {
        $this->experienceRepository->remove($experience);
        $this->redirect('show', 'Candidate', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * action deleteAjax
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function deleteAjaxAction(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->experienceRepository->remove($experience);
        $json[$experience->getUid()] = array(
            'uid' => $experience->getUid()
        );
        return json_encode($json);
    }
}
