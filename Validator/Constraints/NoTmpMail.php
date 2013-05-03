<?php
/**
 * Description of NoTmpMail
 *
 * @author michael
 */
namespace tabernicola\BlogBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NoTmpMail extends Constraint {
    public $message = "L'adresse %string% est rejetée."; 
}

?>
