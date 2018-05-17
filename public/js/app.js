class Github {
    constructor() {
        this.client_id = 'eb4b2d430cd348f24cdb';
        this.client_secret = '49264db8ef977111c4c2d2c6ff4bffc7e1ad8ed7';
        this.repos_count = 5;
        this.repos_sort = 'created: asc';
    }

    async getUser(user) {
        const profileResponse = await fetch(`https://api.github.com/users/${user}?client_id=${this.client_id}&client_secret=${this.client_secret}`);

        const repoResponse = await fetch(`https://api.github.com/users/${user}/repos?per_page=${this.repos_count}&sort=${this.repos_sort}&client_id=${this.client_id}&client_secret=${this.client_secret}`);
        const profile = await profileResponse.json();
        const repos = await repoResponse.json();
        return {
            profile,
            repos
        }
    }
}
class UI {
    constructor() {
        this.profile = document.getElementById('profile');
    }

    showProfile(user) {
        this.profile.innerHTML = `<div class="card card-body mb-3">
    <div class="row">
        <div class="col-md-3">
            <img src="${user.avatar_url}" alt="" class="img-fluid mb-2">
            <a href="${user.html_url}" target="_blank" class="btn btn-primary btn-block mb-4">View Profile</a>
        </div>
        <div class="col-md 9">
            <span class="badge badge-primary">Public Repos: ${user.public_repos}</span>
            <span class="badge badge-secondary">Gists: ${user.public_gists}</span>
            <span class="badge badge-success">Followers: ${user.followers}</span>
            <span class="badge badge-info">Following: ${user.following}</span>
            <br><br>
            <ul class="list-group">
                <li class="list-group-item">Company: ${user.company}</li>
                <li class="list-group-item">Website/Blog: ${user.blog}</li>
                <li class="list-group-item">Location: ${user.location}</li>
                <li class="list-group-item">Member Since: ${user.created_at}</li>
            </ul>
        </div>
    </div>
</div>`;
    }

    showRepos(repos){
        let output = '';
        repos.forEach(function(repo) {
            output += `<div class="card card-body mb-2">
    <div class="row">
        <div class="col-md-6">
            <a href="${repo.html_url}">${repo.name}</a>
        </div>
        <div class="col-md-6">
            <span class="badge badge-primary">Stars: ${repo.stargazers_count}</span>
            <span class="badge badge-secondary">Gists: ${repo.watchers_count}</span>
            <span class="badge badge-success">Followers: ${repo.forks_count}</span>
        </div>
    </div>
</div>`;
            document.getElementById('repos').innerHTML = output;
        })
    }

    showAlert(message, className) {
        this.clearAlert();
        const div = document.createElement('div');
        div.className = className;
        div.appendChild(document.createTextNode(message));
        const container = document.querySelector('.searchContainer');
        const search = document.querySelector('.search');
        container.insertBefore(div, search);

        setTimeout(() => {
            this.clearAlert()
        }, 3000);

    }

    clearAlert() {
        const currentAlert = document.querySelector('.alert');
        if (currentAlert) {
            currentAlert.remove();
        }
    }

    clearProfile() {
        this.profile.innerHTML = '';
    }
}
const github = new Github;
const ui = new UI;
const searchUser = document.getElementById('searchUser');
searchUser.addEventListener('keyup', (e) => {
    const userText = e.target.value;
    if(userText !== '') {
        github.getUser(userText).then(data => {
            if(data.profile.message === 'Not Found') {
                ui.showAlert('User not found', 'alert alert-danger');
            }
            else{
                ui.showProfile(data.profile);
                ui.showRepos(data.repos);
            }

        })
        console.log(userText);
    }
    else{
ui.clearProfile();
    }
});