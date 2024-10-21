interface Link {
    url: string | null;
    label: string;
    active: boolean;
}

interface Pagination<T> {
    current_page: number;
    data: T[];
    first_page_url: string;
    from: number;
    last_page: number;
    last_page_url: string;
    links: Link[];
    next_page_url: string | null;
    path: string;
    per_page: number;
    prev_page_url: string | null;
    to: number;
    total: number;
}

interface Form {
    id: number;
    name: string;
    ulid: string;
    submissions_count: number;
    user_id: number;
    created_at: string;
    updated_at: string;
    deleted_at: string | null;
}