@extends('layouts.app')

@section('content')
<div class="card card-chat overflow-hidden">
  <div class="card-body d-flex p-0 h-100">
    <div class="chat-sidebar">

      <div class="contacts-list scrollbar-overlay">
        <div class="hover-actions-trigger chat-contact nav-item active" role="tab" aria-orientation="vertical">
          <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-0" data-bs-toggle="tab" data-bs-target="#chat-0" aria-controls="chat-0" aria-selected="true">
            <div class="d-md-none d-lg-block">
              <div class="dropdown dropdown-active-trigger dropdown-chat">
                <button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2">
                  @if (Auth::user()->role == 1)
                  <a class="dropdown-item text-danger" href="#!">Delete</a>
                  @else
                  <a class="dropdown-item text-danger" href="#!">Leave Group</a>
                  @endif
                </div>
              </div>
            </div>

            <div class="d-flex p-3">
              <div class="avatar avatar-xl">
                <div class="rounded-circle overflow-hidden h-100 d-flex">
                  <img src="{{asset('images/group.png')}}" alt="" />
                </div>
              </div>
              <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                <div class="d-flex justify-content-between">
                  <h6 class="mt-2">Avengers</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hover-actions-trigger chat-contact nav-item" role="tab" aria-orientation="vertical">
          <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-1" data-bs-toggle="tab" data-bs-target="#chat-1" aria-controls="chat-1" aria-selected="false">
            <div class="d-md-none d-lg-block">
              <div class="dropdown dropdown-active-trigger dropdown-chat">
                <button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2">
                  @if (Auth::user()->role == 1)
                  <a class="dropdown-item text-danger" href="#!">Delete</a>
                  @else
                  <a class="dropdown-item text-danger" href="#!">Leave Group</a>
                  @endif
                </div>
              </div>
            </div>

            <div class="d-flex p-3">
              <div class="avatar avatar-xl">
                <div class="rounded-circle overflow-hidden h-100 d-flex">
                  <img src="{{asset('images/group.png')}}" alt="" />
                </div>
              </div>
              <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                <div class="d-flex justify-content-between">
                  <h6 class="mt-2">Avengers</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="contacts-search-wrapper">
        <div class="form-group mb-0 position-relative d-md-none d-lg-block w-100 h-100">
          {{-- {{ dd(Auth::user()->role); }} --}}
          @if (Auth::user()->role == 1)
          <button class="btn btn-primary form-control form-control-sm chat-contacts-search border-0 h-100" type="button" data-bs-toggle="modal" data-bs-target="#error-modal" style="color: black">Create Group</button>
          @endif
        </div>
      </div>
    </div>

    <div class="tab-content card-chat-content">
      <div class="tab-pane card-chat-pane active" id="chat-1" role="tabpanel" aria-labelledby="chat-link-1">
        <div class="chat-content-header">
          <div class="row flex-between-center">
            <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                <div class="fas fa-chevron-left"></div>
              </a>
              <div class="min-w-0">
                <h5 class="mb-0 text-truncate fs-0">Test</h5>
              </div>
            </div>
            <div class="col-auto">
              <button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button>
            </div>
          </div>
        </div>
        <div class="chat-content-body" style="display: inherit;">
          <div class="conversation-info" data-index="1">
            <div class="h-100 overflow-auto scrollbar">
              <div class="d-flex position-relative align-items-center p-3 border-bottom">
                <div class="avatar avatar-xl">
                  <div class="rounded-circle overflow-hidden h-100 d-flex">
                    <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt="" /></div>
                    <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom" src="../assets/img/team/2.jpg" alt="" /><img class="h-50" src="../assets/img/team/3.jpg" alt="" /></div>
                  </div>
                </div>
                <div class="flex-1 ms-2 d-flex flex-between-center">
                  <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Avengers</a></h6>
                  <div class="dropdown z-index-1">
                    <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-1">
                      @if (Auth::user()->role == 1)
                      <a class="dropdown-item" href="#!">Delete Group</a>
                      <div class="dropdown-divider"></div>
                      @endif
                      <a class="dropdown-item" href="#!">Keluar Group</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-3" id="others-info-1">
                <div class="title" id="member-title-1">
                  <a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</a>
                </div>
                <div id="members-1">
                  <div class="d-flex align-items-center py-2">
                    <div class="avatar avatar-xl status-online">
                      <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-2 d-flex justify-content-between">
                      <div>
                        <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                        <div class="fs--2 text-400">Admin</div>
                      </div>
                      <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                        <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-0"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-2 d-flex justify-content-between">
                      <div>
                        <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Emma Watson</a></h6>
                        <div class="fs--2 text-400">Member</div>
                      </div>
                      <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                        <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-1"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
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
                <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">In an organisation stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g. having a website where members’ profile will be displayed along with other organisational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Anna</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="flex-1 d-flex justify-content-end">
                <div class="w-100 w-xxl-75">
                  <div class="hover-actions-trigger d-flex flex-end-center">
                    <div class="bg-primary text-white p-2 rounded-2 chat-message light">Your are right 👍
                    </div>
                  </div>
                  <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">We should divide the tasks among all other members.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Antony</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">I will make a list of all the tasks.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">John</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
            <div class="d-flex p-3">
              <div class="flex-1 d-flex justify-content-end">
                <div class="w-100 w-xxl-75">
                  <div class="hover-actions-trigger d-flex flex-end-center">
                    <div class="bg-primary text-white p-2 rounded-2 chat-message light">I can help you to do this.
                    </div>
                  </div>
                  <div class="text-400 fs--2 text-end">
                    11:54 am
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">It will be a great opportunity if I can contribute to this task 😊</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Emma</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">Wow, it will be great!</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2"><a href="#!" class="text-primary">@Emma</a> What do you think about the plan?</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane card-chat-pane" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
        <div class="chat-content-header">
          <div class="row flex-between-center">
            <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                <div class="fas fa-chevron-left"></div>
              </a>
              <div class="min-w-0">
                <h5 class="mb-0 text-truncate fs-0">Avengers</h5>
              </div>
            </div>
            <div class="col-auto">
              <button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button>
            </div>
          </div>
        </div>
        <div class="chat-content-body" style="display: inherit;">
          <div class="conversation-info" data-index="1">
            <div class="h-100 overflow-auto scrollbar">
              <div class="d-flex position-relative align-items-center p-3 border-bottom">
                <div class="avatar avatar-xl">
                  <div class="rounded-circle overflow-hidden h-100 d-flex">
                    <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt="" /></div>
                    <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom" src="../assets/img/team/2.jpg" alt="" /><img class="h-50" src="../assets/img/team/3.jpg" alt="" /></div>
                  </div>
                </div>
                <div class="flex-1 ms-2 d-flex flex-between-center">
                  <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Avengers</a></h6>
                  <div class="dropdown z-index-1">
                    <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-1">
                      @if (Auth::user()->role == 1)
                      <a class="dropdown-item" href="#!">Delete Group</a>
                      <div class="dropdown-divider"></div>
                      @endif
                      <a class="dropdown-item" href="#!">Keluar Group</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-3" id="others-info-1">
                <div class="title" id="member-title-1">
                  <a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</a>
                </div>
                <div id="members-1">
                  <div class="d-flex align-items-center py-2">
                    <div class="avatar avatar-xl status-online">
                      <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-2 d-flex justify-content-between">
                      <div>
                        <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                        <div class="fs--2 text-400">Admin</div>
                      </div>
                      <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                        <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-0"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 hover-actions-trigger">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-2 d-flex justify-content-between">
                      <div>
                        <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Emma Watson</a></h6>
                        <div class="fs--2 text-400">Member</div>
                      </div>
                      <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1">
                        <button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-1"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
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
                <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">In an organisation stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g. having a website where members’ profile will be displayed along with other organisational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Anna</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="flex-1 d-flex justify-content-end">
                <div class="w-100 w-xxl-75">
                  <div class="hover-actions-trigger d-flex flex-end-center">
                    <div class="bg-primary text-white p-2 rounded-2 chat-message light">Your are right 👍
                    </div>
                  </div>
                  <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">We should divide the tasks among all other members.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Antony</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">I will make a list of all the tasks.</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">John</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
            <div class="d-flex p-3">
              <div class="flex-1 d-flex justify-content-end">
                <div class="w-100 w-xxl-75">
                  <div class="hover-actions-trigger d-flex flex-end-center">
                    <div class="bg-primary text-white p-2 rounded-2 chat-message light">I can help you to do this.
                    </div>
                  </div>
                  <div class="text-400 fs--2 text-end">
                    11:54 am
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">It will be a great opportunity if I can contribute to this task 😊</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Emma</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2">Wow, it will be great!</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex p-3">
              <div class="avatar avatar-l me-2">
                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />

              </div>
              <div class="flex-1">
                <div class="w-xxl-75">
                  <div class="hover-actions-trigger d-flex align-items-center">
                    <div class="chat-message bg-200 p-2 rounded-2"><a href="#!" class="text-primary">@Emma</a> What do you think about the plan?</div>
                  </div>
                  <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form class="chat-editor-area">
        <div class="emojiarea-editor outline-none scrollbar" contenteditable="true"></div>
        <button class="btn btn-sm btn-primary" type="submit">Send</button>
      </form>
    </div>

  </div>
</div>
{{-- modal --}}
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/create-group" method="POST">
        @csrf
        <div class="modal-body p-0">
          <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
            <h4 class="mb-1" id="modalExampleDemoLabel">Add a new group</h4>
          </div>
          <div class="p-4 pb-0">
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Name group</label>
              <input class="form-control" id="recipient-name" type="text" name="name_group" required>
            </div>
            <input type="text" name="code" hidden>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit" name="addGroup">Create Group</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection