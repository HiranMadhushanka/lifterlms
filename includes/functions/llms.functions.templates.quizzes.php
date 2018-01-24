<?php
/**
 * Template functions for quizzes & questions
 * @since    1.0.0
 * @version  [version]
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Single question main content template
 * @return void
 * @since    [version]
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_content' ) ) {
	function lifterlms_template_question_content( $args ) {
		echo $args['question']->get_html( $args['attempt'] );
	}
}

/**
 * Single question description template
 * @return void
 * @since    [version]
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_description' ) ) {
	function lifterlms_template_question_description( $args ) {
		llms_get_template( 'quiz/questions/description.php', $args );
	}
}

/**
 * Single question featured image template
 * @return void
 * @since    [version]
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_image' ) ) {
	function lifterlms_template_question_image( $args ) {
		llms_get_template( 'quiz/questions/image.php', $args );
	}
}

/**
 * Single question featured video template
 * @return void
 * @since    [version]
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_video' ) ) {
	function lifterlms_template_question_video( $args ) {
		llms_get_template( 'quiz/questions/video.php', $args );
	}
}

/**
 * Question Wrapper End Template Include
 * @return void
 * @since    1.0.0
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_wrapper_end' ) ) {
	function lifterlms_template_question_wrapper_end( $args ) {
		llms_get_template( 'quiz/questions/wrapper-end.php', $args );
	}
}

/**
 * Question Wrapper Start Template Include
 * @return void
 * @since    1.0.0
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_question_wrapper_start' ) ) {
	function lifterlms_template_question_wrapper_start( $args ) {
		llms_get_template( 'quiz/questions/wrapper-start.php', $args );
	}
}

/**
 * Passing Percent Template Include
 * @return void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_quiz_meta_info' ) ) {
	function lifterlms_template_quiz_meta_info() {
		llms_get_template( 'quiz/meta-information.php' );
	}
}

/**
 * Quiz Single Attempt Results
 * @return   void
 * @since    [version]
 * @version  [version]
 */
if ( ! function_exists( 'lifterlms_template_quiz_attempt_results' ) ) {
	function lifterlms_template_quiz_attempt_results( $attempt = null ) {
		llms_get_template( 'quiz/results-attempt.php', array( 'attempt' => $attempt ) );
	}
}

/**
 * Quiz Results Template Include
 * @return void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_quiz_results' ) ) {
	function lifterlms_template_quiz_results() {
		llms_get_template( 'quiz/results.php' );
	}
}



/**
 * Lesson Return link Template Include
 * @return void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_quiz_return_link' ) ) {
	function lifterlms_template_quiz_return_link() {
		llms_get_template( 'quiz/return-to-lesson.php' );
	}
}

/**
 * Quiz: wrapper end ( quiz container )
 * @return   void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_quiz_wrapper_end' ) ) {
	function lifterlms_template_quiz_wrapper_end() {
		llms_get_template( 'quiz/quiz-wrapper-end.php' );
	}
}

/**
 * Quiz: wrapper start ( quiz container )
 * @return   void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_quiz_wrapper_start' ) ) {
	function lifterlms_template_quiz_wrapper_start() {
		llms_get_template( 'quiz/quiz-wrapper-start.php' );
	}
}

/**
 * Start Button Template Include
 * @todo  this should be renamed to lifterlms_template_quiz_start_button
 * @return void
 * @since    1.0.0
 * @version  1.0.0
 */
if ( ! function_exists( 'lifterlms_template_start_button' ) ) {
	function lifterlms_template_start_button() {
		llms_get_template( 'quiz/start-button.php' );
	}
}