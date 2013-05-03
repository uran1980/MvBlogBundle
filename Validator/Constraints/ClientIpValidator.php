<?php
/**
 * Description of NoTmpMailValidator
 *
 * @author michael
 */
namespace tabernicola\BlogBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ClientIpValidator extends ConstraintValidator {
    
    public function validate($value, Constraint $constraint)
    {
        if ($value !== $_SERVER['REMOTE_ADDR']) {
            $this->context->addViolation($constraint->message);
        }
    }  
}

?>
