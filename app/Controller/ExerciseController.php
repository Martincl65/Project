<?php

namespace App\Controller;

use App\Controller;
use App\Form;
use App\Table\Developer;
use App\Table\Exercise;
use App\Table\Response;

class ExerciseController extends Controller {

    /**
     * @param int $exercise_id
     */
    public function show($exercise_id){
        $developer_id = $_SESSION['auth'];
        /** @var \App\Table\Developer $developer */
        $developer = Developer::find($developer_id);
        /** @var \App\Table\Exercise $exercise */
        $exercise = Exercise::find($exercise_id);

        /** @var \App\Table\Test $test */
        $test = $developer->getTest();
        $exercises_id = array();
        foreach($test->getExercises() as $testExercise) {
            /** @var \App\Table\Exercise $testExercise */
            $exercises_id[] = $testExercise->getId();
        }
        if($exercise == false || !in_array($exercise->getId(), $exercises_id)){
            $this->render('404/404', array('developer' => $developer, 'test' => $test));
        }

        else {
            $response = Response::findOneBy(array('id_developer' => $developer->getId(), 'id_exercise' => $exercise_id));

            if ($response == NULL) {
                $response = new Response();
                $response->setDeveloper($developer);
                $response->setExercise($exercise);
            }

            $form = new Form('Response_form', $response);

            if ($form->isSubmitted()) {
                if ($response->getId()) {
                    $response->update();
                } else {
                    //enregistrement de la nouvelle réponse
                    $response->add();
                }
            }

            $this->render('exercise/index', array('developer' => $developer, 'test' => $test, 'response' => $response, 'form' => $form, 'exercise' => $exercise));
        }
    }

}