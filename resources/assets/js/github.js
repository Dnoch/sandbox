class Github {
    constructor() {
        this.client_id = 'eb4b2d430cd348f24cdb';
        this.client_secret = '49264db8ef977111c4c2d2c6ff4bffc7e1ad8ed7';
    }

    async getUser(user) {
        const profileResponse = await fetch(`https://api.github.com/users/${user}?client_id=${this.client_id}&client_secret=${this.client_secret}`);
        const profile = await profileResponse.json();
        return {
            profile
        }
    }
}