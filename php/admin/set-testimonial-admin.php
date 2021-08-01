<?php 
    /* First validation - Get Current Page or set the default at testimony 1 */
    if (isset($_GET['testimony']) && is_numeric($_GET['testimony'])) {
        $testimony = (int) $_GET['testimony'];
    } else {
        $testimony = 1;
    }   /* end if */

    /* Second validation - Current testimony should be less than or equal to 3 */
    if ($testimony > 3) {
        $testimony = 1;
    } /* end if */

    /* Third validation - Current testimony should be greater than or equal to 1 */
    if ($testimony < 1) {
    $testimony = 1;
    } /* end if */

    /* Set Array Based on Testimonial Page */
    require_once '../testimony-articles/article'.$testimony.'.php';
?>