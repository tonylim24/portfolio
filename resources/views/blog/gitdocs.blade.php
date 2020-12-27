@extends('layouts.main')

@push('top-scripts')
    {{-- <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}"> --}}
@endpush

@section('content')
    <div id="web-header-blog">
        {{-- React DOM Manipulation: js/components/HeaderBlog.js --}}
    </div>

    <div class="body-container">
        <div class="position-ref">
            <section>
                <div class="page-header" id="gitdocs">
                    <h2>Git Documentation</h2>
                </div>
                <hr/>
                
                <div class="panel-group" id="gitdocs_panel">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-2" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Obtaining *commitHash* Codes</b>
                                </a>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git log --oneline
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-3" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Switching branch</b>
                                </a>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git checkout *branchName*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-4" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Creating New Branch</b>
                                </a>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git checkout -b *branchName* //This will create local branch <br>
                                            git push *remoteName* *branchName* //Pushing local branch to remote with the same name.
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-5" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Set upstream to remote branch</b>
                                </a>
                            </div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git push --set-upstream *remoteName* *branchName*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-6" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Reverting Change(s)</b>
                                </a>
                            </div>
                            <div id="collapse-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            //First obtain *commitHash* that wants to be reverted <br>
                                            git revert *commitHash*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-7" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Testing a specific commit</b>
                                </a>
                            </div>
                            <div id="collapse-7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git checkout *commitHash*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-8" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Resetting a git back to previous working commit</b>
                                </a>
                            </div>
                            <div id="collapse-8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git reset --hard *commitHash* <br>
                                            git push --force *remoteName/origin* *branchName*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-9" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Deleting git branch from local</b>
                                </a>
                            </div>
                            <div id="collapse-9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git branch -d *branchName*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="#collapse-10" data-toggle="collapse" data-parent="#gitdocs_panel">
                                    <b>Deleting branch from remote (do after performing local delete)</b>
                                </a>
                            </div>
                            <div id="collapse-10" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><code>
                                            git push *remoteName/origin* --delete *branchName*
                                        </code></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div id="web-footer">
        {{-- React DOM Manipulation: js/components/Footer.js --}}
    </div>
    
@endsection