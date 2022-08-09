package com.slog.agentassignment.fragment;

import android.content.Context;
import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.appcompat.widget.Toolbar;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.RelativeLayout;

import com.facebook.shimmer.ShimmerFrameLayout;
import com.slog.agentassignment.R;
import com.slog.agentassignment.constants.BaseApp;
import com.slog.agentassignment.item.RHistoryItem;
import com.slog.agentassignment.json.AllTransResponseJson;
import com.slog.agentassignment.json.DetailRequestJson;
import com.slog.agentassignment.models.User;
import com.slog.agentassignment.utils.api.ServiceGenerator;
import com.slog.agentassignment.utils.api.service.UserService;

import java.util.Objects;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class ReciveHistoryFragment extends Fragment {

    private Context context;
    private ShimmerFrameLayout shimmer;
    private RecyclerView recycle;
    private RHistoryItem RhistoryItem;
    private RelativeLayout rlnodata;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View getView = inflater.inflate(R.layout.fragment_recycle, container, false);
        context = getContext();
        shimmer = getView.findViewById(R.id.shimmerwallet);
        recycle = getView.findViewById(R.id.inboxlist);
        rlnodata = getView.findViewById(R.id.rlnodata);
        Toolbar toolbar = getView.findViewById(R.id.toolbar);
        toolbar.setVisibility(View.VISIBLE);
        recycle.setHasFixedSize(true);
        recycle.setLayoutManager(new GridLayoutManager(context, 1));
        return getView;
    }
    private void shimmershow() {
        recycle.setVisibility(View.GONE);
        shimmer.setVisibility(View.VISIBLE);
        shimmer.startShimmerAnimation();
    }

    private void shimmertutup() {

        recycle.setVisibility(View.VISIBLE);
        shimmer.setVisibility(View.GONE);
        shimmer.stopShimmerAnimation();
    }

    private void getdatatrans() {
        shimmershow();
        User loginUser = BaseApp.getInstance(context).getLoginUser();
        UserService userService = ServiceGenerator.createService(
                UserService.class, loginUser.getNoTelepon(), loginUser.getPassword());
        DetailRequestJson param = new DetailRequestJson();
        param.setId(loginUser.getId());
        userService.history(param).enqueue(new Callback<AllTransResponseJson>() {
            @Override
            public void onResponse(@NonNull Call<AllTransResponseJson> call, @NonNull Response<AllTransResponseJson> response) {
                if (response.isSuccessful()) {
                    shimmertutup();
                    RhistoryItem = new RHistoryItem(context, Objects.requireNonNull(response.body()).getData(), R.layout.item_order);
                    recycle.setAdapter(RhistoryItem);
                    if (response.body().getData().isEmpty()) {
                        recycle.setVisibility(View.GONE);
                        rlnodata.setVisibility(View.VISIBLE);
                    } else {
                        recycle.setVisibility(View.VISIBLE);
                        rlnodata.setVisibility(View.GONE);
                    }
                }
            }

            @Override
            public void onFailure(@NonNull Call<AllTransResponseJson> call, @NonNull Throwable t) {

            }
        });
    }

    @Override
    public void onResume() {
        super.onResume();
        getdatatrans();
    }
}