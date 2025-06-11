<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Job Title" />
        <x-forms.input label="Salary" name="salary" placeholder="Salary" />
        <x-forms.input label="Location" name="location" placeholder="Location" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="url" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="tag" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
