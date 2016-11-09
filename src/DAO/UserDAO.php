<?php

namespace Asrac\DAO;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Asrac\Domain\User;

class UserDAO extends DAO implements UserProviderInterface {

    // Returns a user matching the supplied id.
    public function find($id) {
        $sql = "select * from User where usr_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No user matching id " . $id);
    }

    public function loadUserByUsername($username)
    {
        $sql = "select * from User where usr_name=?";
        $row = $this->getDb()->fetchAssoc($sql, array($username));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return 'Asrac\Domain\User' === $class;
    }
//
//    // Creates a User object based on a DB row.
//    protected function buildDomainObject($row) {
//        $user = new User();
//        $user->setId($row['usr_id']);
//        $user->setUsername($row['usr_name']);
//        $user->setPassword($row['usr_password']);
//        $user->setSalt($row['usr_salt']);
//        $user->setRole($row['usr_role']);
//        return $user;
//    }
//
//	// Saves a user into the database.
//    public function save(User $user) {
//        $userData = array(
//            'usr_name' => $user->getUsername(),
//            'usr_salt' => $user->getSalt(),
//            'usr_password' => $user->getPassword(),
//            'usr_role' => $user->getRole()
//            );
//
//        if ($user->getId()) {
//            // The user has already been saved : update it
//            $this->getDb()->update('t_user', $userData, array('usr_id' => $user->getId()));
//        } else {
//            // The user has never been saved : insert it
//            $this->getDb()->insert('t_user', $userData);
//            // Get the id of the newly created user and set it on the entity.
//            $id = $this->getDb()->lastInsertId();
//            $user->setId($id);
//        }
//    }
//
//     // Removes a user from the database.
//    public function delete($id) {
//        // Delete the user
//        $this->getDb()->delete('t_user', array('usr_id' => $id));
//    }

}
