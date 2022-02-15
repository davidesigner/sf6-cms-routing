GREEN=$'\e[0;32m'
RED=$'\e[0;31m'
YELLOW=$'\e[0;33m'
DEFAULT=$'\e[0;37m'

question() {
    local question=$1
    local choices=$2
    local default=$3
    echo -e "== $question (${choices}) [${default}] "
    read RESPONSE
    if [ "x$RESPONSE" = "x" ]; then
        RESPONSE=$default
    fi
}

simple_question() {
    local question=$1
    echo -e "== $question"
    read RESPONSE
}

ask_data() {
    local question=$1
    local default=$2
    echo -e "== $question (default: ${YELLOW}${default}${DEFAULT}):"
    read RESPONSE
    if [ "x$RESPONSE" = "x" ]; then
        RESPONSE=$default
    fi
}

error () {
    echo -e >&2 "${RED}Error: ${DEFAULT}$@${DEFAULT}"
    exit 1
}

title () {
    echo -e "${YELLOW}------------------------------${DEFAULT}"
    echo -e "${YELLOW}----- ${1} ${DEFAULT}"
    echo -e "${YELLOW}------------------------------${DEFAULT}"
}
