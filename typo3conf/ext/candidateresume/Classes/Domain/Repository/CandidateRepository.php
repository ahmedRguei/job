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
    public function findSimilarCandidates()
    {
        $query = $this->createQuery();
        $query->setLimit(7);
        return $query->execute();
    }
    public function findByName($name, $skills, $location)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
                $query->like('firstName', '%'.$name.'%'),
                $query->like('lastName', '%'.$name.'%')
            ),
            $query->logicalAnd(
                $query->like('address', '%'.$location.'%')
            )
        );
        return $query->execute();
    }
}