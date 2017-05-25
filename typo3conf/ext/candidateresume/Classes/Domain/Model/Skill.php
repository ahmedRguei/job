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
 * Skills
 */
class Skill extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title of the skill
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Level of the skill
     * 
     * @var string
     */
    protected $level = '';

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
     * Returns the level
     * 
     * @return string $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets the level
     * 
     * @param string $level
     * @return void
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }
}
