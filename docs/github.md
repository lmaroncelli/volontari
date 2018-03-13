

git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/lmaroncelli/volontari.git
git push -u origin master
…or push an existing repository from the command line
￼
git remote add origin https://github.com/lmaroncelli/volontari.git
git push -u origin master
…or import code from another repository
You can initialize this repository with code from a Subversion, Mercurial, or TFS project.


https://help.github.com/articles/fetching-a-remote/



To grab a complete copy of another user's repository, use git clone like this:

$ git clone https://github.com/lmaroncelli/volontari.git
# Clones a repository to your computer

git pull remotename branchname
# Grabs online updates and merges them with your local work