@extends('layouts.main')
@section('title', 'Component Form')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="{{ asset('') }}assets/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'dice-d6',
                'heading1' => 'Component',
                'heading2' => 'Form',
                'pagedescription' => 'Components are supporting blade templates on this website',
            ])
            @endcomponent
        </div>


        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <x-div div :text="__('Pro Tip!')" class="h5" />
                        <p>
                            Laravel has provided one of the interesting features in its templating blade, namely Components.
                            Components allow us to chop up code so that it can be reused without having to rewrite all the
                            parts completely. Similar to sections and layouts which are also part of the blade tempalting
                            feature.
                        </p>
                        <p class="m-0">
                            Follow a slogal with a useful link or call to action <a href="#" target="_blank">Call to
                                action >></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <x-column-layout :sizes="[6, 6]" :useCards="[true, false]">
            <x-slot name="slot0">
                <h3>
                    Component Modal
                </h3>
                <p>
                <div class="btn-group">
                    <!-- Small modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#default-example-modal-sm">Default Modal Small</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-default" data-toggle="modal"
                        data-target="#default-example-modal">Default Modal</button>
                    <!-- Large modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#default-example-modal-lg">Default Modal Large</button>
                </div>
                <!-- Modal -->
                <x-modal id="default-example-modal-sm" title="Edit Profile" subtitle="Make changes to your profile details"
                    size="modal-sm">
                    <form>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="john_doe">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="john@example.com">
                        </div>
                    </form>
                </x-modal>
                <!-- Modal -->
                <x-modal id="default-example-modal" title="Edit Profile" subtitle="Make changes to your profile details">
                    <form>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="john_doe">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="john@example.com">
                        </div>
                    </form>
                </x-modal>
                <x-modal id="default-example-modal-lg" title="Edit Profile" subtitle="Make changes to your profile details"
                    size="modal-lg">
                    <form>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="john_doe">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="john@example.com">
                        </div>
                    </form>

                </x-modal>
                </p>

                <h3>
                    Component Form
                </h3>
                <p>
                    <x-form.input-field label="Square edges" type="text" name="example-input-square"
                        id="example-input-square" sizeClass="form-control" styleClass="rounded-0" />
                    <x-form.input-field label="Rounded pill" type="text" name="example-input-pill"
                        id="example-input-pill" sizeClass="form-control" styleClass="rounded-pill" />
                    <x-form.input-field label="Material" type="text" name="example-input-material"
                        id="example-input-material" sizeClass="form-control"
                        styleClass="rounded-0 border-top-0 border-left-0 border-right-0 px-0 bg-transparent" />
                    <x-form.input-field label="Border color" type="text" name="example-input-border"
                        id="example-input-border" sizeClass="form-control" styleClass="border-info" />
                </p>
                <p>
                    <x-column-layout :sizes="[3, 3]" :useCards="[false, false]">
                        <x-slot name="slot0">
                            <x-form.switch id="eventlog-switch" name="event_log" :checked="true" value="1"
                                labelChecked="Active" labelUnchecked="Inactive" />
                        </x-slot>
                        <x-slot name="slot1">
                            <x-form.switch id="notifications-switch" name="notifications" :checked="false"
                                value="1" labelChecked="Enabled" labelUnchecked="Disabled" />
                        </x-slot>
                    </x-column-layout>
                </p>
                <p>
                    <x-form.input-field label="Text" type="text" name="simpleinput" id="simpleinput"
                        sizeClass="input-lg" />
                    <x-form.input-field label="Email" type="email" name="example-email-2" id="example-email-2"
                        placeholder="Email" sizeClass="input-sm" />
                    <x-form.input-field label="Password" type="password" name="example-password" id="example-password"
                        value="password" sizeClass="input-md" />
                    <x-form.input-field label="Text area" type="textarea" name="example-textarea" id="example-textarea"
                        placeholder="Enter your text here" sizeClass="input-lg" />
                    <x-form.input-field label="Static control" type="text" name="example-static" id="example-static"
                        value="email@example.com" readonly="true" sizeClass="input-sm" />
                    <x-form.input-field label="Helping text" type="text" name="example-helping" id="example-helping"
                        placeholder="Helping text"
                        helpText="A block of help text that breaks onto a new line and may extend beyond one line."
                        sizeClass="input-md" />
                    <x-form.input-field label="Input Select" type="select-custom" name="example-custom-select"
                        id="example-custom-select" :options="['Open this select menu', '1', '2', '3']" sizeClass="custom-select-sm" />
                    <x-form.input-field label="Multiple Select" type="multi-select" name="example-multiselect"
                        id="example-multiselect" :options="['1', '2', '3', '4', '5']" sizeClass="form-control-lg" />
                    <x-form.input-field label="Default file input" type="file" name="example-fileinput"
                        id="example-fileinput" sizeClass="form-control-file" />
                    <x-form.input-field label="Date" type="date" name="example-date" id="example-date"
                        value="2023-07-23" sizeClass="input-md" />
                    <x-form.input-field label="Number" type="number" name="example-number" id="example-number"
                        value="839473" sizeClass="input-lg" />
                    <x-form.input-field label="File (Browser)" type="file-custom" name="customFile" id="customFile"
                        placeholder="Choose file" sizeClass="custom-file-input" />
                </p>
                <p>
                <div class="form-group mb-0">
                    <label class="form-label" for="customFile">File (Browser)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                </p>
                <p class="mb-g">
                    <strong>For more information on premium support and purchasing support credits, please find our
                        <a href="/intel_introduction">contact details here</a>.</strong>
                </p>
                <h3>
                    Free community support
                </h3>
                <p>
                    Free support is available for SmartAdmin through the <a href="https://support.gotbootstrap.com/"
                        target="_blank">SmartAdmin's Community forums</a>. Answers are provided freely by the
                    community
                    whenever possible. The forums are a busy place and it is not always possible to ensure that
                    every
                    question will receive an answer from the community. To increase the likelihood of receiving a
                    reply,
                    when posting a question please ensure that you provide a link to a test case, screenshot or
                    formatted
                    codes, showing the problem so it can be debugged.
                </p>
            </x-slot>
            <x-slot name="slot1">
                <form id="form_action" action="#" method="post">
                    <x-panel.show title="Default" subtitle="Example">
                        <x-slot name="paneltoolbar">
                            <x-panel.tool-bar>
                                <select class="custom-select custom-select-sm">
                                    <option selected="">Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </x-panel.tool-bar>
                            <x-panel.tool-bar class="ml-2">
                                <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                                    <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                                    <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                                </div>
                            </x-panel.tool-bar>
                            <x-panel.tool-bar class="ml-2">
                                <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                    original_title="Collapse" />
                                <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                    original_title="Fullscreen" />
                                <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                    original_title="Close" />
                            </x-panel.tool-bar>
                            <x-panel.tool-bar class="ml-2">
                                <x-button-ellipsis :menuItems="[
                                    ['text' => 'Kembali', 'href' => '/dashboard'],
                                    ['text' => 'Another action', 'href' => '#'],
                                    ['divider' => true],
                                    ['text' => 'Something else here', 'href' => '#'],
                                ]" />
                            </x-panel.tool-bar>
                        </x-slot>
                        <x-slot name="tagpanel">
                            All panels needs to have an unique ID in order to use the panel funtions.
                            <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                            <code>min-height</code> value and default <code>flexbox</code> properties. The
                            <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                            <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                            padding.
                        </x-slot>


                        <x-form.input name="name" value="name" label="Name" inline="true" />
                        <x-form.input name="url" value="url" label="Url" inline="true" />
                        <x-form.input name="category" value="category" label="Category" inline="true" />
                        <x-form.input name="icon" value="icon" label="Icon" inline="true" />
                        <x-form.input name="orders" value="orders" label="Orders" inline="true" />

                        <x-form.input name="password" label="Password" type="password" inline="true" />

                        <button type="submit" class="btn btn-primary btn-sm ml-auto">Submit</button>

                        <x-slot name="panelcontentfoot">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="demoCheck">
                                <label class="custom-control-label" for="demoCheck">Checkbox</label>
                            </div>
                            <x-button type="submit" size="sm" :label="__('Save')" class="ml-auto" />
                        </x-slot>
                    </x-panel.show>
                </form>
            </x-slot>
        </x-column-layout>


    </main>
@endsection
