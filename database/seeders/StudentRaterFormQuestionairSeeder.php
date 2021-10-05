<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentQuestionairForm;

class StudentRaterFormQuestionairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentQuestionairForm::create([
            'name'         => 'Administrator',
            'A_Question_1' => 'Demonstrate sensitivity to student’s ability to attend and to absorb content information.',
            'A_Question_2' => 'Integrates sensitively his/her learning objectives with those of the students in a collaborative process.',
            'A_Question_3' => 'Makes self-available to students beyond official time slots.',
            'A_Question_4' => 'Regularly comes to class on time, well-groomed and well-prepared to complete assigned responsibilities',
            'A_Question_5' => 'Keeps accurate records of students’ performance and prompt submission of the same.',

            'B_Question_1' => 'Demonstrate mastery of the subject matter.(explain the subject matter without relying solely on the prescribed textbooks)',
            'B_Question_2' => 'Draws and shares information on the art of theory and practice in his/her discipline.',
            'B_Question_3' => 'Integrates subject to practical circumstances and learning intents/purposes of students.',
            'B_Question_4' => 'Explains the relevance of present topics lessons, and relates the subject matter to relevant current issues and/or daily life activities',
            'B_Question_5' => 'Demonstrate up-to-date knowledge and/or awareness on current trends and issues of the subject.',

            'C_Question_1' => 'Creates teaching strategies that allows students to practice using Concepts they need to understand and (interactive decision)',
            'C_Question_2' => 'Enhances students’ self-esteem and/or gives due recognition to students’ performance/potential.',
            'C_Question_3' => 'Allows students to create their own course with objectives and realistically Defined student-professor rules to make them accountable for their performance.',
            'C_Question_4' => 'Allows students to think independently and make their own decisions and holding them accountable for their performance based largely on their success in executing decisions.',
            'C_Question_5' => 'Encourage students to learn beyond what is required and help/guide the students how to apply the concepts learned.',

            'D_Question_1' => 'Creates opportunities for extension contribution of students (e.g. breaks class into dyad, triads or buzz/talk groups)',
            'D_Question_2' => 'Assumes roles as facilitator, resource person, coach, inquisitor, integrator, referee in drawing students to contribute to knowledge and understanding of the concepts at hand.',
            'D_Question_3' => 'Designs and implements learning conditions and experiences that promotes healthy exchange and/or confrontations.',
            'D_Question_4' => 'Structures/re-structures learning and teaching learning context to enhance attainment of collective learning objectives.',
            'D_Question_5' => 'Use of Instructional Materials (audio/video materials: fieldtrips, film showing, computer aided instruction and etc.) to reinforces learning processes.',
        ]);
    }
}
