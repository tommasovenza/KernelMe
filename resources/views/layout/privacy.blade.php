@extends('layout.app')

@section('title', 'Privacy Policy | Tommaso Venza')

@section('meta_description',
    'Privacy policy for tommasovenza.com: information on how contact form data is collected,
    used and stored when you send a message from this site.')

@section('canonical', route('privacy'))

@section('content')
    <div class="container pt-10 pb-10">
        <h1 class="text-3xl mb-4">Privacy Policy</h1>
        <p>This website is operated by <strong>Tommaso Venza</strong> (hereinafter, the “Controller”).</p>

        <h2>Data processed through the contact form</h2>
        <p>When you fill in the contact form, the following data are collected:</p>
        <ul>
            <li>First and last name</li>
            <li>Email address</li>
            <li>Content of your message</li>
            <li>Technical information such as IP address and date/time of the request</li>
        </ul>

        <h2>Purpose of processing</h2>
        <p>Your data are used exclusively to reply to the requests you send through the contact form and to manage any
            further communication related to your enquiry.</p>

        <h2>Legal basis</h2>
        <p>The legal basis for the processing is the Controller’s legitimate interest in handling contact requests received
            through the website and, where applicable, the execution of pre-contractual measures taken at your request.</p>

        <h2>Processing methods and data retention</h2>
        <p>Data are processed using electronic tools.</p>
        <p>Contact requests and related data are stored for the time strictly necessary to handle your enquiry and, in any
            case, for no longer than 12 months, unless longer retention is required to comply with legal obligations or to
            protect the Controller’s rights.</p>

        <h2>Data recipients</h2>
        <p>Your data are not sold or disclosed to third parties for marketing purposes.</p>
        <p>They may be processed by service providers strictly necessary for the operation of the website and for email
            services (such as hosting and email providers), acting as data processors on behalf of the Controller.</p>

        <h2>Your rights</h2>
        <p>You can, at any time, request access to your personal data, their rectification or erasure, or the restriction of
            their processing. You can also object to the processing where the legal basis is legitimate interest.</p>
        <p>To exercise your rights, you can contact the Controller at: <a
                href="mailto:tommasovenza@gmail.com">tommasovenza@gmail.com</a></p>
    </div>
@endsection
