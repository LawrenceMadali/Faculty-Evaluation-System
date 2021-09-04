<div>
    <div class="space-y-4 mt-4">
        {{--------------------------------------------------- School Year --------------------------------------------------}}
        @livewire('administrator.manage-settings.school-year-property')
        <x-jet-section-border />

        {{-------------------------------------------------- Semester --------------------------------------------------}}
        @livewire('administrator.manage-settings.semester-property')
        <x-jet-section-border />

        {{-------------------------------------------------- College --------------------------------------------------}}
        @livewire('administrator.manage-settings.college-property')
        <x-jet-section-border />

        {{-------------------------------------------------- Course --------------------------------------------------}}
        @livewire('administrator.manage-settings.course-property')
        <x-jet-section-border />

        {{-- ------------------------------------------------ Year and Section ------------------------------------------------}}
        @livewire('administrator.manage-settings.year-section-property')
        <x-jet-section-border />

        {{-------------------------------------------------- Course Code --------------------------------------------------}}
        @livewire('administrator.manage-settings.course-code-property')
        <x-jet-section-border />


    </div>
</div>
