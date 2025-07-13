<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email, int $phone): void
{
    $contacts[] = 
    [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];
};

function getContacts(array $contacts): array
{
    if(empty($contacts)) {
        return ['message' => 'No contacts found.'];
    }else {
        foreach($contacts as $contact){
            echo "
                Name: {$contact ['name']};
                Email: {$contact ['email']};
                Phone: {$contact ['phone']};\n
            ";
        }
    }

    return $contacts;
};


while(true) {
    echo "Contact Management App";
    echo "
    Press 1 to add contact.
    Press 2 to view contact.
    Press 3 to exit the App.
    ";

    $choose = (int)(readline("Choose an option: "));

    if($choose === 1) {
        $name = readline("Enter contact name: ");
        $email = readline("Enter contact email: ");
        $phone = (int)readline("Enter contact phone number: ");
        
        addContact($contacts, $name, $email, $phone);
        echo "Contact added successfully! \n";
    } elseif($choose === 2) {
        $result = getContacts($contacts);
    } elseif($choose === 3) {
        echo "Exiting the app. Goodbye! \n";
        break;
    } else {
        echo "Invalid option. Please try again. \n";
    }
    echo "\n";
}

?>