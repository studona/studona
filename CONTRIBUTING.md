# Contribution guidelines
First of all, thank you very much for your interest in contributing to this project.

The consideration and application of the contribution directives mentioned here will contribute to a more rapid, comprehensible and transparent development.

There are many ways to help this open source project. Write tutorials, improve documentation, share bugs with others, make feature requests, or just write code. We look forward to every contribution.

Please **do not** use the issue tracker for support requests, please use our discord server (You can find more information about this in the [README.md](README.md)).

## Table of contents

* [General rules](#general-rules)
* [Issues](#issues)
    * [Bug report](#bug-report)
    * [Feature request](#feature-request)
* [Contributing code](#contributing-code)
    * [Branches](#branches)
    * [Commits](#commits)
    * [Pull requests](#pull-requests)

## General rules
* Follow our [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md)

## Issues
For feature requests or bug reports, use the issue templates and fill them out.

### Bug report
For bug reports use the following template:

[/.github/ISSUE_TEMPLATE/bug_report.md](/.github/ISSUE_TEMPLATE/bug_report.md)


### Feature request
For feature request use the following template:

[/.github/ISSUE_TEMPLATE/feature_request.md](/.github/ISSUE_TEMPLATE/feature_request.md)

## Contributing code
The following syntax applies to name formats:

`{INHALT}` => Content **must** be set

`CONTENT A/CONTENT B` => Content A or Content B (xor)

`<CONTENT>` => Content is optional

Example:

`I said {hello/bye} <to my buddy>`

Valid names:

`I said bello`

`I said bye`

`I said hello to my buddy`

`I said bye to my buddy`

### Branches
To implement new functions or fix bugs, a new branch must be created in the following name format:

`{feat/fix}/{short title for feature/short title for fix}`


`feat` - A new function or an update of the existing functionality

`fix` - A bug fix or a small correction

Branches must be written in Snake case (example_case).

Examples:

`feat/user_login`

`fix/automatic_logout`

### Commits
Commits should always have meaningful content. A commit should contain at most a related set of files, but better still one file. A commit message must have the following name format:

```
{feat/fix}<(scope)>: {short summary of feature/ short summary of fix} <(#issueID)>
NEWLINE
<longer description of feature/ longer description of fix>
```

Commits must be written in lower case (example case), except the scope and the description.

Example:
```
feat: add follow system (#1)

Allows users to follow each other.
```

### Pull requests
To add the code to the master branch, a pull request must be opened. The title must have the following name format:


`{feat/fix}: {short description of feature/short description of fix}`

Pull Request must use the Pull Request template ([/.github/pull_request_template.md](/.github/pull_request_template.md)) and must be filled out completely.
