<?php
namespace Softtodo\Candidateresume\Domain\Repository;

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
 * The repository for Candidates
 */
class CandidateRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findAll() {
        $query = $this->createQuery();
        $query->setOrderings(
            array(
                'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            )
        );
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $candidates = $query->execute();
        return $candidates;
    }
    public function findSimilarCandidates($uid, $skills)
    {
        $skill = explode(",", $skills);
        $skill[1] = !isset($skill[1]) ? 'a' : $skill[1] ;
        $skill[2] = !isset($skill[2]) ? 'a' : $skill[2] ;

        $query = $this->createQuery();
        $constraints[] = $query->logicalAnd(
            $query->like('acquiredSkills', '%'.$skill[0].'%'),
            $query->like('acquiredSkills', '%'.$skill[1].'%'),
            $query->like('acquiredSkills', '%'.$skill[2].'%')
        );
        $constraints[] = $query->logicalAnd(
            $query->logicalNot(
                $query->equals('uid', $uid)
            )
        );
        $query->matching($query->logicalAnd($constraints));
        return $query->execute();
    }
    public function findByName($name, $title, $skills)
    {
        $skill = explode(" ", $skills);
        $skill[1] = !isset($skill[1]) ? 'a' : $skill[1] ;
        $skill[2] = !isset($skill[2]) ? 'a' : $skill[2] ;
        $query = $this->createQuery();
        $constraints[] = $query->logicalAnd(
            $query->logicalOr(
                $query->like('firstName', '%'.$name.'%'),
                $query->like('lastName', '%'.$name.'%')
            ),
            $query->like('professionalTitle', '%'.$title.'%'),
            $query->logicalOr(
                $query->like('acquiredSkills', '%'.$skill[0].'%'),
                $query->like('acquiredSkills', '%'.$skill[1].'%'),
                $query->like('acquiredSkills', '%'.$skill[2].'%')
            )
        );
        $query->matching($query->logicalAnd($constraints));
        return $query->execute();
    }
}