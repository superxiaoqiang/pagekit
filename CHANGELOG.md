# Changelog

## WIP
### Added
- Https for Pagekit API (#415)
- Site title to browser title
- Mysql character set compatibility (#434, #465)

### Changed
- Site tree adds its leaf node routes first (#420)
- User authentication uses separate table
- Config file generation

### Removed
- Usage of environment variables (#428)
- Site description
- Pagekit version from generator tag

### Fixed
- User widget ordering
- Nodes reordering
- Finder component for non Unix OS's (#448)
- HttpExceptions returning with Code 500
- Internal URLs not being resolved in feeds (#466)

## 0.9.1 (September 11, 2015)
### Added
- Additional system requirements (#410)
- Link to gitter chat

### Changed
- By default "display errors" are set to"off"

### Fixed
- Auto login
- Login widget (#423)

## 0.9.0 (September 10, 2015)
### Added
- Site tree
- New default theme
- Data-reactive components with Vue.js
- Package management using Composer

### Changed
- Codebase

## 0.8.8 (November 17, 2014)
### Added
- Pagination in Blog extension
- Languages from Transifex

### Changed
- Updated UIkit to 2.11.1

### Fixed
- Comment status bug
- Reordering menu bug
- Marketplace grid
- Thumbnail grid in Storage
- Several issues for shared hosters

## 0.8.7 (September 8, 2014)
### Added
- OAuth api

### Changed
- Library dependencies

### Fixed
- Option cache issue

## 0.8.6 (August 28, 2014)

### Changed
- Requirejs scripts ordering

### Removed
- 'settings' from extension/theme config, use 'parameters' instead
- GLOB_BRACE for Solaris compatiblity

### Fixed
- Blog/Page url handling
- Blog extension settings

## 0.8.5 (August 22, 2014)
### Added
- Marketplace pagination
- Beautified system emails
- Admin theme font subset latin, latin-ext

### Changed
- Updated UIkit to 2.9

### Removed
- Username in password reset

### Fixed
- Simple plugin regex
- Gravatar on https

## 0.8.4 (July 25, 2014)
### Added
- Finnish, French, Spanish, Russian translations
- Pagination in user manager

### Changed
- mod_rewrite check
- Widgets render themselves now
- Comments settings in blog
- The app root no longer needs to be writable if the config already exists

### Fixed
- Comments ordering (blog)
- Comments auto approval (blog)
- Finder (Windows)
- Demo data for SQLite versions < 3.7.11
- Language registration for Themes and Extensions
- Blank renderer in theme skeleton
- Redirect after installation
- Apache configuration to serve SVG files with correct mime type
- Verify mail action
