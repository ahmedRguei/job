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
 * LanguageController
 */
class LanguageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * languageRepository
     * 
     * @var \Softtodo\Candidateresume\Domain\Repository\LanguageRepository
     * @inject
     */
    protected $languageRepository = null;

    /**
     * CandidateRepository
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
        $languages = $this->languageRepository->findAll();
        $this->view->assign('languages', $languages);
    }

    /**
     * action show
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $language
     * @return void
     */
    public function showAction(\Softtodo\Candidateresume\Domain\Model\Language $language)
    {
        $this->view->assign('language', $language);
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
     * @param \Softtodo\Candidateresume\Domain\Model\Language $newLanguage
     * @param \Softtodo\Candidateresume\Domain\Model\Candidate $candidate
     * @return void
     */
    public function createAction(\Softtodo\Candidateresume\Domain\Model\Language $newLanguage,
                                 \Softtodo\Candidateresume\Domain\Model\Candidate $candidate)
    {
        $candidate->addLanguage($newLanguage);
        $this->candidateRepository->update($candidate);
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->languageRepository->add($newLanguage);
        $this->redirect('new', 'Language', 'Candidateresume', array('candidate' => $candidate) );
    }

    /**
     * action add
     *
     * @param \Softtodo\Candidateresume\Domain\Model\Language $newLanguage
     * @return void
     */
    public function addAction(\Softtodo\Candidateresume\Domain\Model\Language $newLanguage)
    {
        $this->languageRepository->add($newLanguage);
        $json[$newLanguage->getUid()] = array('addedLanguage' => $newLanguage->getTitle());
        return json_encode($json);
    }

    /**
     * action edit
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $language
     * @ignorevalidation $language
     * @return void
     */
    public function editAction(\Softtodo\Candidateresume\Domain\Model\Language $language)
    {
        $this->view->assign('language', $language);
    }

    /**
     * action update
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $language
     * @return void
     */
    public function updateAction(\Softtodo\Candidateresume\Domain\Model\Language $language)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->languageRepository->update($language);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $language
     * @return void
     */
    public function deleteAction(\Softtodo\Candidateresume\Domain\Model\Language $language)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->languageRepository->remove($language);
        $this->redirect('list');
    }
}
