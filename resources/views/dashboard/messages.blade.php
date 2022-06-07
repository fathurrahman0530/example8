@extends('layouts.app')

@section('content')
<div class="card card-chat overflow-hidden">
    <div class="card-body d-flex p-0 h-100">
        <div class="tab-content card-chat-content">
            <div class="tab-pane card-chat-pane active" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
                <div class="chat-content-header">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-8 d-flex align-items-center"><a
                                class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                                <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg><!-- <div class="fas fa-chevron-left"></div> Font Awesome fontawesome.com -->
                            </a>
                            <div class="min-w-0">
                                <h5 class="text-truncate fs-0">Antony Hopkins</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="0"
                                data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Conversation Information"
                                aria-label="Conversation Information"><svg class="svg-inline--fa fa-info fa-w-6"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z">
                                    </path>
                                </svg><!-- <span class="fas fa-info"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                </div>
                <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="0">
                        <div class="h-100 overflow-auto scrollbar">
                            <div class="d-flex position-relative align-items-center p-3 border-bottom">
                                <div class="avatar avatar-xl status-online">
                                    <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                                </div>
                                <div class="flex-1 ms-2 d-flex flex-between-center">
                                    <h6 class="mb-0">
                                        <a class="text-decoration-none stretched-link text-700"
                                            href="../pages/user/profile.html">
                                            Antony Hopkins
                                        </a>
                                    </h6>
                                    <div class="dropdown z-index-1">
                                        <button
                                            class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3"
                                            type="button" id="profile-dropdown-0" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><svg
                                                class="svg-inline--fa fa-cog fa-w-16" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="cog" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-cog"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="profile-dropdown-0"><a class="dropdown-item"
                                                href="#!">Mute</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#!">Archive</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="title"><button type="button" aria-expanded="false"
                                        class="btn-accordion hover-text-decoration-none dropdown-indicator w-100 btn btn-link">Members</button>
                                    <div class="collapse">
                                        <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                            <div class="avatar avatar-xl status-away"><img class="rounded-circle "
                                                    src="/static/media/2.20b1aba3.jpg" alt=""></div>
                                            <div class="d-flex flex-1 ms-2 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><a class="text-700" href="/user/profile">Kit
                                                            Harington</a></h6>
                                                    <div class="fs--2 text-400">Admin</div>
                                                </div>
                                                <div
                                                    class="dropdown-active-trigger hover-actions position-relative z-index-1 dropdown">
                                                    <button type="button" id="dropdown-button" aria-expanded="false"
                                                        class="dropdown-caret-none text-400 dropdown-toggle btn btn-link btn-sm"><svg
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="ellipsis-h"
                                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 " role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                            </path>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                            <div class="avatar avatar-xl status-online"><img class="rounded-circle "
                                                    src="/static/media/3.b3477e97.jpg" alt=""></div>
                                            <div class="d-flex flex-1 ms-2 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><a class="text-700" href="/user/profile">Sophie
                                                            Turner</a></h6>
                                                    <div class="fs--2 text-400">Moderator</div>
                                                </div>
                                                <div
                                                    class="dropdown-active-trigger hover-actions position-relative z-index-1 dropdown">
                                                    <button type="button" id="dropdown-button" aria-expanded="false"
                                                        class="dropdown-caret-none text-400 dropdown-toggle btn btn-link btn-sm"><svg
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="ellipsis-h"
                                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 " role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                            </path>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                            <div class="avatar avatar-xl status-online"><img class="rounded-circle "
                                                    src="/static/media/4.482e0311.jpg" alt=""></div>
                                            <div class="d-flex flex-1 ms-2 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><a class="text-700" href="/user/profile">Peter
                                                            Dinklage</a></h6>
                                                    <div class="fs--2 text-400">Member</div>
                                                </div>
                                                <div
                                                    class="dropdown-active-trigger hover-actions position-relative z-index-1 dropdown">
                                                    <button type="button" id="dropdown-button" aria-expanded="false"
                                                        class="dropdown-caret-none text-400 dropdown-toggle btn btn-link btn-sm"><svg
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="ellipsis-h"
                                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 " role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                            </path>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                            <div class="avatar avatar-xl status-online"><img class="rounded-circle "
                                                    src="/static/media/5.3fdcffd4.jpg" alt=""></div>
                                            <div class="d-flex flex-1 ms-2 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><a class="text-700" href="/user/profile">Nikolaj
                                                            Coster</a></h6>
                                                    <div class="fs--2 text-400">Member</div>
                                                </div>
                                                <div
                                                    class="dropdown-active-trigger hover-actions position-relative z-index-1 dropdown">
                                                    <button type="button" id="dropdown-button" aria-expanded="false"
                                                        class="dropdown-caret-none text-400 dropdown-toggle btn btn-link btn-sm"><svg
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="ellipsis-h"
                                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 " role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                            </path>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                            <div class="avatar avatar-xl status-online"><img class="rounded-circle "
                                                    src="/static/media/6.73c7fce2.jpg" alt=""></div>
                                            <div class="d-flex flex-1 ms-2 justify-content-between">
                                                <div>
                                                    <h6 class="mb-0"><a class="text-700" href="/user/profile">Isaac
                                                            Hempstead</a></h6>
                                                    <div class="fs--2 text-400">Member</div>
                                                </div>
                                                <div
                                                    class="dropdown-active-trigger hover-actions position-relative z-index-1 dropdown">
                                                    <button type="button" id="dropdown-button" aria-expanded="false"
                                                        class="dropdown-caret-none text-400 dropdown-toggle btn btn-link btn-sm"><svg
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="ellipsis-h"
                                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 " role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                            </path>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                        <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">Yes, in an organization stature,
                                            this is a must. Besides, we need to quickly establish all other professional
                                            appearances, e.g., having a website where members’ profile will be displayed
                                            along with additional organizational information. Providing services to
                                            existing members is more important than attracting new members at this
                                            moment, in my opinion..</div>

                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">What are you doing?</div>

                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Forward" aria-label="Forward"><svg
                                                        class="svg-inline--fa fa-share fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="share" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-share"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Archive" aria-label="Archive"><svg
                                                        class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="archive"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-archive"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><svg
                                                        class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-edit"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Remove" aria-label="Remove"><svg
                                                        class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash-alt"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                        </ul>
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">
                                            <p class="mb-0">I took this pic </p>
                                            <a href="../assets/img/chat/1.jpg" data-gallery="gallery-3">
                                                <img class="rounded" src="../assets/img/chat/1.jpg" alt="" width="150">
                                            </a>

                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Forward" aria-label="Forward"><svg
                                                        class="svg-inline--fa fa-share fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="share" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-share"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Archive" aria-label="Archive"><svg
                                                        class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="archive"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-archive"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><svg
                                                        class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-edit"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Remove" aria-label="Remove"><svg
                                                        class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash-alt"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                        </ul>
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Nothing!
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2 text-success" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2 text-success"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 6, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">How are you?</div>

                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Forward" aria-label="Forward"><svg
                                                        class="svg-inline--fa fa-share fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="share" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-share"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Archive" aria-label="Archive"><svg
                                                        class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="archive"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-archive"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><svg
                                                        class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-edit"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Remove" aria-label="Remove"><svg
                                                        class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash-alt"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                        </ul>
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Fine
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check-double fa-w-16 ms-2" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check-double" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check-double ms-2"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Forward" aria-label="Forward"><svg
                                                        class="svg-inline--fa fa-share fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="share" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-share"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Archive" aria-label="Archive"><svg
                                                        class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="archive"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-archive"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><svg
                                                        class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-edit"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Remove" aria-label="Remove"><svg
                                                        class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash-alt"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                        </ul>
                                        <div class="chat-message chat-gallery">
                                            <div class="row mx-n1">
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/7.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/7.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/8.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/8.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/9.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/9.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/10.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/10.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/11.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/11.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/12.jpg" data-gallery="gallery-1"><img
                                                            src="../assets/img/chat/12.jpg" alt=""
                                                            class="img-fluid rounded"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am<svg
                                            class="svg-inline--fa fa-check fa-w-16 ms-2" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="check" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-check ms-2"></span> Font Awesome fontawesome.com -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message bg-200 p-2 rounded-2">I took some excellent images
                                            yesterday.</div>

                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center fs--2 text-500"><span>May 8, 2019, 11:54 am</span></div>
                        <div class="d-flex p-3">
                            <div class="flex-1 d-flex justify-content-end">
                                <div class="w-100 w-xxl-75">
                                    <div class="hover-actions-trigger d-flex flex-end-center">
                                        <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Forward" aria-label="Forward"><svg
                                                        class="svg-inline--fa fa-share fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="share" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-share"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Archive" aria-label="Archive"><svg
                                                        class="svg-inline--fa fa-archive fa-w-16" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="archive"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-archive"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><svg
                                                        class="svg-inline--fa fa-edit fa-w-18" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="edit" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-edit"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                            <li class="list-inline-item"><a class="chat-option" href="#!"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Remove" aria-label="Remove"><svg
                                                        class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="trash-alt"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-trash-alt"></span> Font Awesome fontawesome.com --></a>
                                            </li>
                                        </ul>
                                        <div class="bg-primary text-white p-2 rounded-2 chat-message light">Give me the
                                            images.
                                        </div>
                                    </div>
                                    <div class="text-400 fs--2 text-end">11:54 am
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex p-3">
                            <div class="avatar avatar-l me-2">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="">

                            </div>
                            <div class="flex-1">
                                <div class="w-xxl-75">
                                    <div class="hover-actions-trigger d-flex align-items-center">
                                        <div class="chat-message chat-gallery">
                                            <div class="row mx-n1">
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/1.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/1.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/2.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/2.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/3.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/3.jpg" alt=""
                                                            class="img-fluid rounded mb-2"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/4.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/4.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/5.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/5.jpg" alt=""
                                                            class="img-fluid rounded mb-2 mb-lg-0"></a>
                                                </div>
                                                <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                                    <a href="../assets/img/chat/6.jpg" data-gallery="gallery-2"><img
                                                            src="../assets/img/chat/6.jpg" alt=""
                                                            class="img-fluid rounded"></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-400 fs--2"><span>11:54 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="chat-editor-area">
                <div class="emojiarea-editor outline-none scrollbar" contenteditable="true"
                    placeholder="Type your message"></div>
                <input class="d-none" type="file" id="chat-file-upload">
                <label class="chat-file-upload cursor-pointer" for="chat-file-upload">
                    <svg class="svg-inline--fa fa-paperclip fa-w-14" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M43.246 466.142c-58.43-60.289-57.341-157.511 1.386-217.581L254.392 34c44.316-45.332 116.351-45.336 160.671 0 43.89 44.894 43.943 117.329 0 162.276L232.214 383.128c-29.855 30.537-78.633 30.111-107.982-.998-28.275-29.97-27.368-77.473 1.452-106.953l143.743-146.835c6.182-6.314 16.312-6.422 22.626-.241l22.861 22.379c6.315 6.182 6.422 16.312.241 22.626L171.427 319.927c-4.932 5.045-5.236 13.428-.648 18.292 4.372 4.634 11.245 4.711 15.688.165l182.849-186.851c19.613-20.062 19.613-52.725-.011-72.798-19.189-19.627-49.957-19.637-69.154 0L90.39 293.295c-34.763 35.56-35.299 93.12-1.191 128.313 34.01 35.093 88.985 35.137 123.058.286l172.06-175.999c6.177-6.319 16.307-6.433 22.626-.256l22.877 22.364c6.319 6.177 6.434 16.307.256 22.626l-172.06 175.998c-59.576 60.938-155.943 60.216-214.77-.485z">
                        </path>
                    </svg><!-- <span class="fas fa-paperclip"></span> Font Awesome fontawesome.com -->
                </label>
                <div class="btn btn-link emoji-icon" data-emoji-button="data-emoji-button"><svg
                        class="svg-inline--fa fa-laugh-beam fa-w-16" aria-hidden="true" focusable="false"
                        data-prefix="far" data-icon="laugh-beam" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 496 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm141.4 389.4c-37.8 37.8-88 58.6-141.4 58.6s-103.6-20.8-141.4-58.6S48 309.4 48 256s20.8-103.6 58.6-141.4S194.6 56 248 56s103.6 20.8 141.4 58.6S448 202.6 448 256s-20.8 103.6-58.6 141.4zM328 152c-23.8 0-52.7 29.3-56 71.4-.7 8.6 10.8 11.9 14.9 4.5l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c4.1 7.4 15.6 4 14.9-4.5-3.1-42.1-32-71.4-55.8-71.4zm-201 75.9l9.5-17c7.7-13.7 19.2-21.6 31.5-21.6s23.8 7.9 31.5 21.6l9.5 17c4.1 7.4 15.6 4 14.9-4.5-3.3-42.1-32.2-71.4-56-71.4s-52.7 29.3-56 71.4c-.6 8.5 10.9 11.9 15.1 4.5zM362.4 288H133.6c-8.2 0-14.5 7-13.5 15 7.5 59.2 58.9 105 121.1 105h13.6c62.2 0 113.6-45.8 121.1-105 1-8-5.3-15-13.5-15z">
                        </path>
                    </svg><!-- <span class="far fa-laugh-beam"></span> Font Awesome fontawesome.com -->
                </div>
                <button class="btn btn-sm btn-send" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
