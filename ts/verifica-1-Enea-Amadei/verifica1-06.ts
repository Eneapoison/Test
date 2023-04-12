interface Post {
    userId: number;
    id: number;
    title: string;
    body: string;
}

function getPostList(): Promise<Post[]> {
    return fetch('https://jsonplaceholder.typicode.com/posts')
        .then(response => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json() as Promise<Post[]>
        });
}

const userId = new Date().getFullYear() % 10 + 1; // Calcola l'id dell'utente in base all'anno di nascita

getPostList()
    .then(posts => {
        const userPosts = posts.filter(post => post.userId === userId); // Filtra i post dell'utente corretto

        userPosts.forEach(post => {
            console.log(`ID: ${post.id}`);
            console.log(`User ID: ${post.userId}`);
            console.log(`Title: ${post.title}`);
            console.log('\n');
        });
    })
    .catch(error => {
        console.error(error);
    });