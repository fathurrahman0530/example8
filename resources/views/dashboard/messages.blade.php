@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-md-3 container-fluid" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card card-chat overflow-hidden mt-1">
  <div class="card-body d-flex p-0 h-100">
    <div class="tab-content card-chat-content">
      <div class="tab-pane card-chat-pane active" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
          <div class="chat-content-header">
              <div class="row flex-between-center">
                  <div class="col-6 col-sm-8 d-flex align-items-center">
                    <a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                          </svg><!-- <div class="fas fa-chevron-left"></div> Font Awesome fontawesome.com -->
                      </a>
                      <a href="/dashboard" class="btn btn-success btn-sm" style="margin-right: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left text-900 fs-3"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                      </a>
                      <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">{{ $data['group']->name_group }}</h5>
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
                          <div class="avatar avatar-xl">
                              <img class="rounded-circle" src="{{asset('images/' . $data['group']->pictures)}}" alt="">
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                              <h6 class="mb-0">
                                {{ $data['group']->name_group }}
                              </h6>
                              <div class="dropdown z-index-1">
                                  <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-inline--fa fa-cog fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
                                        </path>
                                    </svg>
                                      <!-- <span class="fas fa-cog"></span> Font Awesome fontawesome.com -->
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-0">
                                      @if (Auth::user()->role == 1)
                                      <a class="dropdown-item"data-bs-toggle="modal" data-bs-target="#createGroup">Edit Group</a>
                                      <a class="dropdown-item text-danger" href="#!">Delete Group</a>
                                      @endif
                                      <a class="dropdown-item text-danger" href="#!">Leave Group</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="px-3" id="others-info-1">
                        <div class="title" id="member-title-1">
                          <h6 class="btn btn-link btn-accordion hover-text-decoration-none" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</h6>
                        </div>
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="../assets/img/team/2.jpg" alt=""> 
                                </div>
                                <div class="flex-1 ms-2 d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-0">
                                          <a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a>
                                        </h6>
                                        <div class="fs--2 text-400">Admin</div>
                                    </div>
                                    @if (Auth::user()->role == 1)
                                    <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                                      <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="svg-inline--fa fa-ellipsis-h fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                              <path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"> </path>
                                          </svg>
                                          <!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com -->
                                        </button>
                                      <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-0">
                                        <a class="dropdown-item" href="#!">View Profile</a>
                                        <a class="dropdown-item" href="#!">Kick</a>
                                      </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                    </div>
                  </div>
              </div>

              {{-- {{ $message = $data['message'] }} --}}
              <div class="chat-content-scroll-area scrollbar">
                
                @foreach ($data['message'] as $m)
                @if ($m->user_id == Auth::user()->id)
                <div class="d-flex p-3">
                  <div class="flex-1 d-flex justify-content-end">
                      <div class="w-100 w-xxl-75">
                          <div class="hover-actions-trigger d-flex flex-end-center">
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">{{ $m->message }}</div>
                          </div>
                          <div class="text-400 fs--2 text-end">{{ $m->created_at }}</div>
                      </div>
                  </div>
                </div>
                @else
                <div class="d-flex p-3">
                  <div class="avatar avatar-l me-2">
                      <img class="rounded-circle" src="{{ asset('images/'.$m->profile) }}" alt="">
                  </div>
                  <div class="flex-1">
                      <div class="w-xxl-75">
                          <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">{{ $m->message }}</div>
                          </div>
                          <div class="text-400 fs--2"><span>{{ $m->created_at }}</span>
                          </div>
                      </div>
                  </div>
                </div>
                @endif
                @endforeach
                  
              </div>

          </div>
      </div>
      <form class="chat-editor-area">
          <input class="emojiarea-editor form-control outline-none scrollbar" placeholder="Type your message" type="text" name="message">
          <button class="btn btn-primary" type="submit">Send</button>
      </form>
    </div>
  </div>
</div>
{{-- modal --}}
<div class="modal fade" id="createGroup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/edit-group" method="POST">
        @csrf
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Edit group</h4>
          </div>
          <div class="p-4 pb-0">
            <input type="number" name="idGrooup" value="{{ $data['group']->id }}" hidden>
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Name group</label>
              <input class="form-control" id="recipient-name" type="text" name="name_group" value="{{ $data['group']->name_group }}" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="addGroup">Update Group</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
