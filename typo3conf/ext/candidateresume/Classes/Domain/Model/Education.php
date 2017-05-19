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
 * Educations
 */
class Education extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * School name
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $school = '';

    /**
     * Degree
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $degree = '';

    /**
     * Field of study
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $fieldStudy = '';

    /**
     * From year
     * 
     * @var string
     */
    protected $fromDate = null;

    /**
     * To year
     * 
     * @var string
     */
    protected $toDate = null;

    /**
     * Returns the school
     * 
     * @return string $school
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Sets the school
     * 
     * @param string $school
     * @return void
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * Returns the degree
     * 
     * @return string $degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     * 
     * @param string $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * Returns the fieldStudy
     * 
     * @return string $fieldStudy
     */
    public function getFieldStudy()
    {
        return $this->fieldStudy;
    }

    /**
     * Sets the fieldStudy
     * 
     * @param string $fieldStudy
     * @return void
     */
    public function setFieldStudy($fieldStudy)
    {
        $this->fieldStudy = $fieldStudy;
    }

    /**
     * Returns the fromDate
     * 
     * @return string $fromDate
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Sets the fromDate
     * 
     * @param string $fromDate
     * @return void
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;
    }

    /**
     * Returns the toDate
     * 
     * @return string $toDate
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Sets the toDate
     * 
     * @param string $toDate
     * @return void
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
    }
}
