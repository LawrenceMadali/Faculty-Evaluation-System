<div>
    <div class="mx-4 md:mx-36 my-16 space-y-4 font-Montserrat">
        <div>
            @if (session()->has('message'))
            <div class="w-full text-white bg-green-500 mb-2 rounded-md">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path></svg>
                        <p class="mx-3">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="flex items-center justify-center mr-2 w-full text-sm font-poppins p-2 border-2 border-blue-500 bg-blue-200 rounded-md text-blue-700">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span>If the questions are not in present please contact the school staff.</span>
        </div>
        <section class="flex justify-center items-center text-center mb-8 text-gray-700">
            <x-jet-application-mark/>
            <div class="px-4">
                <h2>Republic of the Philippines</h2>
                <h2><b> UNIVERSITY OF RIZAL SYSTEM </b></h2>
                <h2>Province of Rizal</h2>
            </div>
            <x-jet-application-logo/>
        </section>

        <section class="space-y-2 text-gray-700">
                <h1 class="uppercase font-alfa tracking-widest text-xl text-center">Student Rater Form (SRF)</h1>
            <div>
            <h2><b>Directions:</b> This instrument aims to describe aspects of instructor's behavior in and out of the classroom.
                Your rating will improve information which may lead to the improvement of instruction.
                Please rate each item in the answer sheets by encirling the number as carefully as possible.
                Your rating will be kept confidential </h2>
            </div>

            <table class="mx-auto">
                <thead>
                    <tr>
                        <th class="border-b-2"> Scale </th>
                        <th class="border-b-2"> Descriptive </th>
                        <th class="border-b-2"> Qualitative Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center border-b-2">5</td>
                        <td class="text-center border-b-2 sm:px-5">Outstanding</td>
                        <td class="border-b-2">
                            The performance almost exceeds the job requirements. <br/>
                            The Faculty is an exceptional role model.
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center border-b-2">4</td>
                        <td class="text-center border-b-2 sm:px-5">Very Satisfactory</td>
                        <td class="border-b-2">The performance meets and often exceeds the job requirements</td>
                    </tr>
                    <tr>
                        <td class="text-center border-b-2">3</td>
                        <td class="text-center border-b-2 sm:px-5">Satisfactory</td>
                        <td class="border-b-2">The performance meets job requirements</td>
                    </tr>
                    <tr>
                        <td class="text-center border-b-2">2</td>
                        <td class="text-center border-b-2 sm:px-5">Fair</td>
                        <td class="border-b-2">The performance needs more development job requirements</td>
                    </tr>
                    <tr>
                        <td class="text-center border-b-2">1</td>
                        <td class="text-center border-b-2 sm:px-5">Poor</td>
                        <td class="border-b-2">The faculty fails to meet job requirements</td>
                    </tr>
                </tbody>
            </table>
            @forelse ($questionairs as $questionair)
            @if ($questionair->is_enabled === 1)
            <form wire:submit.prevent="submit">
                <div class="space-y-2">
                    <div class="flex items-center justify-center mr-2 w-full text-sm font-poppins p-2 border-2 border-yellow-400 bg-yellow-200 rounded-md text-yellow-700">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Choose Faculty you want to evaluate first... Be sure all chosen Faculty must be evaluated.</span>
                    </div>

                    <div class="flex items-center text-gray-700 font-medium p-2 rounded-md border-none bg-blue-100 space-x-2">
                        <label class="text-sm font-bold">Name of Faculty: &nbsp;</label>
                        <select wire:model="sse_id" class="mt-1 block w-52 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="null">-- select --</option>
                            @foreach ($assignStudents as $as)
                            @if ($as->is_active == 1)
                            <option value="{{ $as->id }}">{{ $as->name }}</option>
                            @endif
                            @endforeach
                        </select>
                        <x-jet-input-error for="sse_id"/>
                    </div>
                    <div class="hidden">
                        <input wire:model="name" type="text">
                        <input wire:model="id_number" type="text">
                        <input wire:model="college_id" type="text">
                        <input wire:model="semester_id" type="text">
                        <input wire:model="school_year_id" type="text">
                    </div>
                    {{-------------------------------------------------- Commitment --------------------------------------------------}}
                    <div class="space-y-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                        <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">A. Commitment </h1>
                        <h2 class="px-2 py-4 mx-auto font-bold text-gray-500"> 1. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_1 }} </h2>
                        <div class="max-w-sm flex flex-col">

                            <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A5" for="1A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A4" for="1A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A3" for="1A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A2" for="1A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A1" for="1A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                            <x-jet-input-error for="commitment_1"/>
                        </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500"> 2. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_2 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A5" for="2A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A4" for="2A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A3" for="2A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A2" for="2A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A1" for="2A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500"> 3. {{ $questionair->is_enabled == 0 ? null :  $questionair->A_Question_3 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A5" for="3A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A4" for="3A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A3" for="3A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A2" for="3A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A1" for="3A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A5" for="4A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A4" for="4A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A3" for="4A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A2" for="4A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A1" for="4A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A5" for="5A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A4" for="5A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A3" for="5A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A2" for="5A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A1" for="5A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Knowledge of Subject --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                        <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">B. Knowledge of Subject</h1>
                        <h2 class="px-2 py-4 mx-auto font-bold text-gray-500"> 1. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_1 }}</h2>
                        <div class="max-w-sm flex flex-col">

                            <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B5" for="1B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B4" for="1B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B3" for="1B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B2" for="1B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B1" for="1B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                            <x-jet-input-error for="knowledge_of_subject_1"/>
                        </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_2 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B5" for="2B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B4" for="2B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B3" for="2B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B2" for="2B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B1" for="2B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_3 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B5" for="3B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B4" for="3B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B3" for="3B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B2" for="3B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B1" for="3B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500"> 4. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B5" for="4B5" value="5">5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B4" for="4B4" value="4">4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B3" for="4B3" value="3">3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B2" for="4B2" value="2">2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B1" for="4B1" value="1">1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B5" for="5B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B4" for="5B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B3" for="5B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B2" for="5B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B1" for="5B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Teaching for Independent Learning --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                        <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">C. Teaching for Independent Learning</h1>
                        <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_1 }}</h2>
                        <div class="max-w-sm flex flex-col">

                            <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C5" for="1C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C4" for="1C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C3" for="1C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C2" for="1C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C1" for="1C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                            <x-jet-input-error for="teaching_for_independent_learning_1"/>
                        </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_2 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C5" for="2C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C4" for="2C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C3" for="2C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C2" for="2C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C1" for="2C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_3 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C5" for="3C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C4" for="3C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C3" for="3C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C2" for="3C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C1" for="3C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C5" for="4C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C4" for="4C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C3" for="4C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C2" for="4C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C1" for="4C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C5" for="5C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C4" for="5C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C3" for="5C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C2" for="5C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C1" for="5C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Management of Learning --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                        <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">D. Management of Learning</h1>
                        <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_1 }}</h2>
                        <div class="max-w-sm flex flex-col">

                            <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D5" for="1D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D4" for="1D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D3" for="1D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D2" for="1D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                            <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D1" for="1D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                            <x-jet-input-error for="management_of_learning_1"/>
                        </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_2 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D5" for="2D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D4" for="2D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D3" for="2D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D2" for="2D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D1" for="2D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_3 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D5" for="3D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D4" for="3D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D3" for="3D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D2" for="3D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D1" for="3D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D5" for="4D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D4" for="4D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D3" for="4D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D2" for="4D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D1" for="4D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D5" for="5D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D4" for="5D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D3" for="5D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D2" for="5D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D1" for="5D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_5"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex justify-end items-center px-4 py-3 bg-gray-50 text-right sm:px-6">
                <x-jet-button class="ml-2" wire:click="$toggle('srfModal')" wire:loading.attr="disabled">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
            @endif
            @empty
            <div class="flex items-center justify-center mr-2 w-full text-sm font-poppins p-2 border-2 border-red-400 bg-red-200 rounded-md text-red-700">
                <span>Opps! No questionairs found.</span>
            </div>
            @endforelse
        </section>
    </div>
    {{-------------------------------------------------- Open Modal --------------------------------------------------}}
    <div>
        <section>
        <x-jet-dialog-modal wire:model.defer="srfModal">
            <x-slot name="title">
                <div class="flex justify-center items-center bg-yellow-300 p-3 rounded-lg shadow-lg">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span class="text-sm">Note: Please review your answer before submitting the form.</span>
                </div>
            </x-slot>
            <x-slot name="content">
                @forelse ($questionairs as $questionair)
                @if ($questionair->is_enabled == 0)
                {{-- <h2 class="p-2 text-center text-sm text-red-700 bg-red-100 rounded-full">Opps! No questionairs enabled yet.</h2> --}}
                @else
                <form wire:submit.prevent="submit">
                    {{-------------------------------------------------- Commitment --------------------------------------------------}}
                    <div class="space-y-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                            <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">A. Commitment</h1>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_1 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A5" for="1A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A4" for="1A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A3" for="1A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A2" for="1A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_1" name="commitment_1" id="1A1" for="1A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_1"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_2 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A5" for="2A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A4" for="2A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A3" for="2A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A2" for="2A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_2" name="commitment_2" id="2A1" for="2A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_3 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A5" for="3A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A4" for="3A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A3" for="3A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A2" for="3A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_3" name="commitment_3" id="3A1" for="3A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A5" for="4A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A4" for="4A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A3" for="4A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A2" for="4A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_4" name="commitment_4" id="4A1" for="4A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->A_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A5" for="5A5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A4" for="5A4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A3" for="5A3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A2" for="5A2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="commitment_5" name="commitment_5" id="5A1" for="5A1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="commitment_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Knowledge of Subject --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                            <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">B. Knowledge of Subject</h1>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_1 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B5" for="1B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B4" for="1B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B3" for="1B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B2" for="1B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_1" name="knowledge_of_subject_1" id="1B1" for="1B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_1"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_2 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B5" for="2B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B4" for="2B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B3" for="2B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B2" for="2B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_2" name="knowledge_of_subject_2" id="2B1" for="2B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_3 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B5" for="3B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B4" for="3B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B3" for="3B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B2" for="3B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_3" name="knowledge_of_subject_3" id="3B1" for="3B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_4 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B5" for="4B5" value="5">5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B4" for="4B4" value="4">4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B3" for="4B3" value="3">3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B2" for="4B2" value="2">2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_4" name="knowledge_of_subject_4" id="4B1" for="4B1" value="1">1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->B_Question_5 }}</h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B5" for="5B5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B4" for="5B4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B3" for="5B3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B2" for="5B2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="knowledge_of_subject_5" name="knowledge_of_subject_5" id="5B1" for="5B1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="knowledge_of_subject_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Teaching for Independent Learning --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                            <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">C.	Teaching for Independent Learning</h1>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_1 }}  </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C5" for="1C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C4" for="1C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C3" for="1C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C2" for="1C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_1" name="teaching_for_independent_learning_1" id="1C1" for="1C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_1"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_2 }}  </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C5" for="2C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C4" for="2C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C3" for="2C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C2" for="2C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_2" name="teaching_for_independent_learning_2" id="2C1" for="2C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_3 }}  </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C5" for="3C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C4" for="3C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C3" for="3C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C2" for="3C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_3" name="teaching_for_independent_learning_3" id="3C1" for="3C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_4 }}  </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C5" for="4C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C4" for="4C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C3" for="4C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C2" for="4C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_4" name="teaching_for_independent_learning_4" id="4C1" for="4C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->C_Question_5 }}  </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C5" for="5C5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C4" for="5C4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C3" for="5C3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C2" for="5C2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="teaching_for_independent_learning_5" name="teaching_for_independent_learning_5" id="5C1" for="5C1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="teaching_for_independent_learning_5"/>
                            </div>
                        </div>
                    </div>

                    {{-------------------------------------------------- Management of Learning --------------------------------------------------}}
                    <div class="space-y-2 mt-2 rounded-lg border-2 border-blue-200 p-2">
                        <div>
                            <h1 class="p-2 text-center text-blue-900 font-alfa uppercase tracking-widest bg-blue-200 rounded-lg">D.	Management of Learning</h1>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">1. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_1 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D5" for="1D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D4" for="1D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D3" for="1D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D2" for="1D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_1" name="management_of_learning_1" id="1D1" for="1D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_1"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">2. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_2 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D5" for="2D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D4" for="2D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D3" for="2D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D2" for="2D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_2" name="management_of_learning_2" id="2D1" for="2D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_2"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">3. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_3 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D5" for="3D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D4" for="3D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D3" for="3D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D2" for="3D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_3" name="management_of_learning_3" id="3D1" for="3D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_3"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">4. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_4 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D5" for="4D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D4" for="4D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D3" for="4D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D2" for="4D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_4" name="management_of_learning_4" id="4D1" for="4D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_4"/>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h2 class="px-2 py-4 mx-auto font-bold text-gray-500">5. {{ $questionair->is_enabled == 0 ? null : $questionair->D_Question_5 }} </h2>
                            <div class="max-w-sm flex flex-col">

                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D5" for="5D5" value="5"> 5 - Outstanding </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D4" for="5D4" value="4"> 4 - Very Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D3" for="5D3" value="3"> 3 - Satisfactory </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D2" for="5D2" value="2"> 2 - Fair </x-srf-form.radio-input>
                                <x-srf-form.radio-input model="management_of_learning_5" name="management_of_learning_5" id="5D1" for="5D1" value="1"> 1 - Poor </x-srf-form.radio-input>

                                <x-jet-input-error for="management_of_learning_5"/>
                            </div>
                        </div>
                        <div>
                            <textarea wire:model.lazy="comments" class="rounded-lg shadow-lg" cols="50" rows="5" placeholder="Comments and Suggestions"></textarea>
                        </div>
                    </div>
                </form>
                @endif
                @empty
                <h2 class="p-2 text-center text-sm text-red-700 bg-red-100 rounded-full">Opps! No questionairs found.</h2>
                @endforelse
            </x-slot>

            <x-slot name="footer">
                <div class=" text-left">
                    <x-jet-validation-errors class="mb-4" />
                </div>
                <div class="flex justify-between">
                    <x-jet-button class="ml-2" wire:click.prevent="submit" wire:loading.attr="disabled">
                    {{ __('Submit') }}
                    </x-jet-button>
                </div>
            </x-slot>

        </x-jet-dialog-modal>
        </section>
    </div>
</div>
