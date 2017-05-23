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
 * Candidates
 */
class Candidate extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * First name of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * Last name of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $lastName = '';

    /**
     * Address of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $address = '';

    /**
     * City of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $city = '';

    /**
     * Phone number of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $phone = '';

    /**
     * Email address of the candidate
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';

    /**
     * longitude
     * 
     * @var string
     */
    protected $longitude = '';

    /**
     * latittude
     * 
     * @var string
     */
    protected $latittude = '';

    /**
     * professionalTitle
     *
     * @var string
     */
    protected $professionalTitle = '';

    /**
     * linkedin
     *
     * @var string
     */
    protected $linkedin = '';

    /**
     * availability
     *
     * @var string
     */
    protected $availability = '';

    /**
     * plannedInterviewDate
     *
     * @var \string
     */
    protected $plannedInterviewDate = null;

    /**
     * realInterviewDate
     *
     * @var \string
     */
    protected $realInterviewDate = null;

    /**
     * interviewNotes
     *
     * @var string
     */
    protected $interviewNotes = '';

    /**
     * resmue
     *
     * @var string
     */
    protected $resmue;

    /**
     * Candidate Spoken Language
     *
     * @var string
     */
    protected $spokenLanguage = '';

    /**
     * Candidate Acquired Skills
     *
     * @var string
     */
    protected $acquiredSkills = '';

    /**
     * Experiences of the candidate
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Experience>
     * @cascade remove
     * @lazy
     */
    protected $experiences = null;

    /**
     * Educations of the candidate
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Education>
     * @cascade remove
     * @lazy
     */
    protected $educations = null;

    /**
     * Skills of the candidate
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Skill>
     * @cascade remove
     * @lazy
     */
    protected $skills = null;

    /**
     * Languages of the candidate
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Language>
     * @cascade remove
     * @lazy
     */
    protected $languages = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->experiences = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->educations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->languages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the firstName
     * 
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     * 
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     * 
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     * 
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the city
     * 
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     * 
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Returns the phone
     * 
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     * 
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the spokenLanguage
     *
     * @return string $spokenLanguage
     */
    public function getSpokenLanguage()
    {
        return $this->spokenLanguage;
    }

    /**
     * Sets the spokenLanguage
     *
     * @param string $spokenLanguage
     * @return void
     */
    public function setSpokenLanguage($spokenLanguage)
    {
        $this->spokenLanguage = $spokenLanguage;
    }
    /**
     * Returns the acquiredSkills
     *
     * @return string $acquiredSkills
     */
    public function getAcquiredSkills()
    {
        return $this->acquiredSkills;
    }

    /**
     * Sets the acquiredSkills
     *
     * @param string $acquiredSkills
     * @return void
     */
    public function setAcquiredSkills($acquiredSkills)
    {
        $this->acquiredSkills = $acquiredSkills;
    }

    /**
     * Adds a Experience
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experience
     * @return void
     */
    public function addExperience(\Softtodo\Candidateresume\Domain\Model\Experience $experience)
    {
        $this->experiences->attach($experience);
    }

    /**
     * Removes a Experience
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Experience $experienceToRemove The Experience to be removed
     * @return void
     */
    public function removeExperience(\Softtodo\Candidateresume\Domain\Model\Experience $experienceToRemove)
    {
        $this->experiences->detach($experienceToRemove);
    }

    /**
     * Returns the experiences
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Experience> $experiences
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Sets the experiences
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Experience> $experiences
     * @return void
     */
    public function setExperiences(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $experiences)
    {
        $this->experiences = $experiences;
    }

    /**
     * Adds a Education
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $education
     * @return void
     */
    public function addEducation(\Softtodo\Candidateresume\Domain\Model\Education $education)
    {
        $this->educations->attach($education);
    }

    /**
     * Removes a Education
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Education $educationToRemove The Education to be removed
     * @return void
     */
    public function removeEducation(\Softtodo\Candidateresume\Domain\Model\Education $educationToRemove)
    {
        $this->educations->detach($educationToRemove);
    }

    /**
     * Returns the educations
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Education> $educations
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * Sets the educations
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Education> $educations
     * @return void
     */
    public function setEducations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $educations)
    {
        $this->educations = $educations;
    }

    /**
     * Adds a Skill
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\Softtodo\Candidateresume\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\Softtodo\Candidateresume\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Skill> $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }

    /**
     * Adds a Language
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $language
     * @return void
     */
    public function addLanguage(\Softtodo\Candidateresume\Domain\Model\Language $language)
    {
        $this->languages->attach($language);
    }

    /**
     * Removes a Language
     * 
     * @param \Softtodo\Candidateresume\Domain\Model\Language $languageToRemove The Language to be removed
     * @return void
     */
    public function removeLanguage(\Softtodo\Candidateresume\Domain\Model\Language $languageToRemove)
    {
        $this->languages->detach($languageToRemove);
    }

    /**
     * Returns the languages
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Language> $languages
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Sets the languages
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Softtodo\Candidateresume\Domain\Model\Language> $languages
     * @return void
     */
    public function setLanguages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $languages)
    {
        $this->languages = $languages;
    }

    /**
     * Returns the longitude
     * 
     * @return string $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     * 
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns the latittude
     * 
     * @return string $latittude
     */
    public function getLatittude()
    {
        return $this->latittude;
    }

    /**
     * Sets the latittude
     * 
     * @param string $latittude
     * @return void
     */
    public function setLatittude($latittude)
    {
        $this->latittude = $latittude;
    }
    /**
     * Sets the professionalTitle
     *
     * @param string $professionalTitle
     * @return void
     */
    public function setProfessionalTitle($professionalTitle)
    {
        $this->professionalTitle = $professionalTitle;
    }

    /**
     * Returns the professionalTitle
     *
     * @return string $professionalTitle
     */
    public function getProfessionalTitle()
    {
        return $this->professionalTitle;
    }
    /**
     * Sets the linkedin
     *
     * @param string $linkedin
     * @return void
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * Returns the linkedin
     *
     * @return string $linkedin
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
    /**
     * Sets the availability
     *
     * @param string $availability
     * @return void
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * Returns the availability
     *
     * @return string $availability
     */
    public function getAvailability()
    {
        return $this->availability;
    }
    /**
     * Sets the plannedInterviewDate
     *
     * @param string $plannedInterviewDate
     * @return void
     */
    public function setPlannedInterviewDate($plannedInterviewDate)
    {
        $this->plannedInterviewDate = $plannedInterviewDate;
    }

    /**
     * Returns the plannedInterviewDate
     *
     * @return string $plannedInterviewDate
     */
    public function getPlannedInterviewDate()
    {
        return $this->plannedInterviewDate;
    }
    /**
     * Sets the realInterviewDate
     *
     * @param string $realInterviewDate
     * @return void
     */
    public function setRealInterviewDate($realInterviewDate)
    {
        $this->realInterviewDate = $realInterviewDate;
    }

    /**
     * Returns the realInterviewDate
     *
     * @return string $realInterviewDate
     */
    public function getRealInterviewDate()
    {
        return $this->realInterviewDate;
    }
    /**
     * Sets the interviewNotes
     *
     * @param string $interviewNotes
     * @return void
     */
    public function setInterviewNotes($interviewNotes)
    {
        $this->interviewNotes = $interviewNotes;
    }

    /**
     * Returns the interviewNotes
     *
     * @return string $interviewNotes
     */
    public function getInterviewNotes()
    {
        return $this->interviewNotes;
    }

    /**
     * Sets the resmue
     *
     * @param string $resmue
     * @return void
     */
    public function setResmue($resmue)
    {
        $this->resmue = $resmue;
    }

    /**
     * Returns the resmue
     *
     * @return string $resmue
     */
    public function getResmue()
    {
        return $this->resmue;
    }
}
