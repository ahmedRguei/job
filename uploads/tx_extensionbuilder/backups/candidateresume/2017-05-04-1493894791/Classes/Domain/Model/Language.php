<?php
namespace Softtodo\Candidateresume\Domain\Model;

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
 * Languages
 */
class Language extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Proficiency
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $proficiency = '';

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the proficiency
     * 
     * @return string $proficiency
     */
    public function getProficiency()
    {
        return $this->proficiency;
    }

    /**
     * Sets the proficiency
     * 
     * @param string $proficiency
     * @return void
     */
    public function setProficiency($proficiency)
    {
        $this->proficiency = $proficiency;
    }
}
