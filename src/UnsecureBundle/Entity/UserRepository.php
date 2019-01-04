<?php

namespace UnsecureBundle\Entity;

use Doctrine\ORM\EntityRepository;
use UnsecureBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    public function findAllWith($subjects = false, $subjectComments = false)
    {
        $q = $this->createQueryBuilder('u');
        
        if ($subjects) {
            $q
                ->addSelect('s')
                ->innerJoin('u.subjects', 's')
            ;
            
            if ($subjectComments) {
                $q
                    ->addSelect('c')
                    ->leftJoin('s.comments', 'c')
                ;
            }
        }
        
        return $q->getQuery()->getResult();
    }
    
    /**
     * Query to check user password
     *
     * @param string $username
     * @param string $hashedPassword
     *
     * @return User
     */
    public function loginQuery($username, $hashedPassword)
    {
        // Use raw query because don't need of Doctrine here...
        $sql = "select * from user where pseudo = '$username' and password = '$hashedPassword'";
        
        try {
            $results = $this->_em->getConnection()->fetchAll($sql);
        } catch (\Exception $e) {
            echo $e->getMessage(); // Debug
            exit;
        }
        
        if (count($results) > 0) {
            $user = new User();
            
            foreach ($results[0] as $key => $value) {
                if ('creationDate' === $key) {
                    $user->setCreationDate(new \DateTime($value));
                    continue;
                }
                
                $user->{'set'.$key}($value);
            }
            
            $this->_em->merge($user);
            
            return $user;
        } else {
            return null;
        }
    }
    
    public function getById($userId)
    {
        return $this->findOneBy(array(
            'id' => $userId,
        ));
    }
}
