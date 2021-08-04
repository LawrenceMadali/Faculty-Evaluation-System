<?php

namespace Database\Seeders;

use App\Models\PeerRatingForm;
use App\Models\StudentRatingForm;
use Illuminate\Database\Seeder;

class PrfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeerRatingForm::create([
            'name' => 'ABAOAG, JOYCE LYN M.',
            'spe_id' => 1,
            'college_id' => 1,
            'semester_id' => 1,
            'school_year_id' => 1,
            'id_number' => 4000000400,
            'evaluator_number' => 4000000401,
            'commitment_1' => rand(1,5),
            'commitment_2' => rand(1,5),
            'commitment_3' => rand(1,5),
            'commitment_4' => rand(1,5),
            'commitment_5' => rand(1,5),

            'knowledge_of_subject_1' => rand(1,5),
            'knowledge_of_subject_2' => rand(1,5),
            'knowledge_of_subject_3' => rand(1,5),
            'knowledge_of_subject_4' => rand(1,5),
            'knowledge_of_subject_5' => rand(1,5),

            'teaching_for_independent_learning_1' => rand(1,5),
            'teaching_for_independent_learning_2' => rand(1,5),
            'teaching_for_independent_learning_3' => rand(1,5),
            'teaching_for_independent_learning_4' => rand(1,5),
            'teaching_for_independent_learning_5' => rand(1,5),

            'management_of_learning_1' => rand(1,5),
            'management_of_learning_2' => rand(1,5),
            'management_of_learning_3' => rand(1,5),
            'management_of_learning_4' => rand(1,5),
            'management_of_learning_5' => rand(1,5),

            'commitment_total' => rand(5,25),
            'knowledge_of_subject_total' => rand(5,25),
            'teaching_for_independent_learning_total' => rand(5,25),
            'management_of_learning_total' => rand(5,25),
            'total' => rand(70,100),
            'scale' => rand(3,5),
            'comments' => 'comment testing',
        ]);

        PeerRatingForm::create([
            'name' => 'ABAOAG, JOYCE LYN M.',
            'spe_id' => 1,
            'college_id' => 1,
            'semester_id' => 1,
            'school_year_id' => 1,
            'id_number' => 4000000400,
            'evaluator_number' => 4000000402,
            'commitment_1' => rand(1,5),
            'commitment_2' => rand(1,5),
            'commitment_3' => rand(1,5),
            'commitment_4' => rand(1,5),
            'commitment_5' => rand(1,5),

            'knowledge_of_subject_1' => rand(1,5),
            'knowledge_of_subject_2' => rand(1,5),
            'knowledge_of_subject_3' => rand(1,5),
            'knowledge_of_subject_4' => rand(1,5),
            'knowledge_of_subject_5' => rand(1,5),

            'teaching_for_independent_learning_1' => rand(1,5),
            'teaching_for_independent_learning_2' => rand(1,5),
            'teaching_for_independent_learning_3' => rand(1,5),
            'teaching_for_independent_learning_4' => rand(1,5),
            'teaching_for_independent_learning_5' => rand(1,5),

            'management_of_learning_1' => rand(1,5),
            'management_of_learning_2' => rand(1,5),
            'management_of_learning_3' => rand(1,5),
            'management_of_learning_4' => rand(1,5),
            'management_of_learning_5' => rand(1,5),

            'commitment_total' => rand(5,25),
            'knowledge_of_subject_total' => rand(5,25),
            'teaching_for_independent_learning_total' => rand(5,25),
            'management_of_learning_total' => rand(5,25),
            'total' => rand(70,100),
            'scale' => rand(3,5),
            'comments' => 'comment testing',
        ]);

        PeerRatingForm::create([
            'name' => 'ABAOAG, JOYCE LYN M.',
            'spe_id' => 1,
            'college_id' => 1,
            'semester_id' => 1,
            'school_year_id' => 1,
            'id_number' => 4000000400,
            'evaluator_number' => 4000000403,
            'commitment_1' => rand(1,5),
            'commitment_2' => rand(1,5),
            'commitment_3' => rand(1,5),
            'commitment_4' => rand(1,5),
            'commitment_5' => rand(1,5),

            'knowledge_of_subject_1' => rand(1,5),
            'knowledge_of_subject_2' => rand(1,5),
            'knowledge_of_subject_3' => rand(1,5),
            'knowledge_of_subject_4' => rand(1,5),
            'knowledge_of_subject_5' => rand(1,5),

            'teaching_for_independent_learning_1' => rand(1,5),
            'teaching_for_independent_learning_2' => rand(1,5),
            'teaching_for_independent_learning_3' => rand(1,5),
            'teaching_for_independent_learning_4' => rand(1,5),
            'teaching_for_independent_learning_5' => rand(1,5),

            'management_of_learning_1' => rand(1,5),
            'management_of_learning_2' => rand(1,5),
            'management_of_learning_3' => rand(1,5),
            'management_of_learning_4' => rand(1,5),
            'management_of_learning_5' => rand(1,5),

            'commitment_total' => rand(5,25),
            'knowledge_of_subject_total' => rand(5,25),
            'teaching_for_independent_learning_total' => rand(5,25),
            'management_of_learning_total' => rand(5,25),
            'total' => rand(70,100),
            'scale' => rand(3,5),
            'comments' => 'comment testing',
        ]);
    }
}
