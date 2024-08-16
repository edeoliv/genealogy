<?php

return [
    // Labels
    'biological' => 'biological',
    'person'     => 'Person',
    'people'     => 'People',
    'people_log' => 'People logbook',

    'family'  => 'Family',
    'profile' => 'Profile',

    'partner'  => 'Partner',
    'partners' => 'Partners',

    'children'      => 'Children',
    'parents'       => 'Parents',
    'grandchildren' => 'Grandchildren',
    'siblings'      => 'Siblings',
    'ancestors'     => 'Ancestors',
    'descendants'   => 'Descendants',
    'dead'          => 'Dead',
    'death'         => 'Death',
    'deceased'      => 'Deceased',

    'grandmother'   => 'Grandmother',
    'grandfather'   => 'Grandfather',
    'nieces'        => 'Nieces',
    'nephews'       => 'Nephews',
    'cousins'       => 'Cousins',
    'uncles'        => 'Uncles',
    'aunts'         => 'Aunts',
    'relationships' => 'Relationships',
    'age'           => 'Age',
    'years'         => '[0,1] Year|[2,*] Years',

    'source'           => 'Source',
    'source_hint'      => 'Specify the source of the file(s) you will upload',
    'source_date'      => 'Date',
    'source_date_hint' => 'Specify the date of the source of the file(s) you will upload',

    // Actions
    'add_father'                     => 'Add father',
    'add_new_person_as_father'       => 'Add NEW person as father',
    'add_existing_person_as_father'  => 'Add EXISTING person as father',
    'add_mother'                     => 'Add mother',
    'add_new_person_as_mother'       => 'Add NEW person as mother',
    'add_existing_person_as_mother'  => 'Add EXISTING person as mother',
    'add_child'                      => 'Add child',
    'add_new_person_as_child'        => 'Add NEW person as child',
    'add_existing_person_as_child'   => 'Add EXISTING person as child',
    'add_person'                     => 'Add person',
    'add_new_person_as_partner'      => 'Add NEW person as partner',
    'add_existing_person_as_partner' => 'Add EXISTING person as partner',
    'add_person_in_team'             => 'Add person in team : :team',
    'add_photo'                      => 'Add photo',
    'add_relationship'               => 'Add relationship',

    'edit'              => 'Edit',
    'edit_children'     => 'Edit children',
    'edit_contact'      => 'Edit contact',
    'edit_death'        => 'Edit death',
    'edit_family'       => 'Edit family',
    'edit_files'        => 'Edit files',
    'edit_person'       => 'Edit person',
    'edit_profile'      => 'Edit profile',
    'edit_relationship' => 'Edit relationship',

    'delete_child'        => 'Disconnect child',
    'delete_person'       => 'Delete person',
    'delete_relationship' => 'Delete relationship',

    // Attributes
    'id'          => 'ID',
    'name'        => 'Name',
    'firstname'   => 'First name',
    'surname'     => 'Surname',
    'birthname'   => 'Birthname',
    'nickname'    => 'Nickname',
    'sex'         => 'Sex',
    'gender'      => 'Gender identity',
    'father'      => 'Father',
    'mother'      => 'Mother',
    'parent'      => 'Parent',
    'dob'         => 'Date of birth',
    'yob'         => 'Year of birth',
    'pob'         => 'Place of birth',
    'dod'         => 'Date of death',
    'yod'         => 'Year of death',
    'pod'         => 'Place of death',
    'email'       => 'Email',
    'password'    => 'Password',
    'address'     => 'Address',
    'street'      => 'Street',
    'number'      => 'Number',
    'postal_code' => 'Postal code',
    'city'        => 'City',
    'province'    => 'Province',
    'state'       => 'State',
    'country'     => 'Country',
    'phone'       => 'Phone',

    'cemetery'          => 'Cemetery',
    'cemetery_location' => 'Cemetery Location',

    // files
    'upload_files'     => 'Upload files',
    'files'            => 'Files',
    'files_saved'      => '[0] No files saved|[1] File saved|[2,*] Files saved',
    'file'             => 'File',
    'file_deleted'     => 'File deleted',
    'update_files_tip' => 'Drag and drop your new files here',

    // Photo
    'avatar'            => 'Avatar',
    'edit_photos'       => 'Edit photos',
    'photo_deleted'     => 'Photo deleted',
    'photo'             => 'Photo',
    'photos'            => 'Photos',
    'photos_saved'      => '[0] No photos saved|[1] Photo saved|[2,*] Photos saved',
    'photos_existing'   => 'Existing photos',
    'set_primary'       => 'Set as primary',
    'upload_photos'     => 'Upload photos',
    'update_photos_tip' => 'Drag and drop your new photos here',

    // Messages
    'yod_not_matching_dod' => 'The Year of death must match the Date of death (:value).',
    'yod_before_dob'       => 'The Year of death can not be before the Date of birth (:value).',
    'yod_before_yob'       => 'The Year of death can not be before the Year of birth (:value).',

    'dod_not_matching_yod' => 'The Date of death must match the Year of death (:value).',
    'dod_before_dob'       => 'The Date of death can not be before the Date of birth (:value).',
    'dod_before_yob'       => 'The Date of death can not be before the Year of birth (:value).',

    'yob_not_matching_dob' => 'The Year of birth must match the Date of birth (:value).',
    'yob_after_dod'        => 'The Year of birth can not be after the Date of death (:value).',
    'yob_after_yod'        => 'The Year of birth can not be after the Year of death (:value).',

    'dob_not_matching_yob' => 'The Date of birth must match the Year of birth (:value).',
    'dob_after_dod'        => 'The Date of birth can not be after the Date of death (:value).',
    'dob_after_yod'        => 'The Date of birth can not be after the Year of death (:value).',

    'not_found' => 'Person not found',
    'use_tab'   => 'Use tab',

    // Validation
    'surname.required_without'   => 'When adding a NEW person, a surname is required.',
    'person_id.required_without' => 'When adding an EXISTING person, select a person.',
];
